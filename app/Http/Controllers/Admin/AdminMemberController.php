<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GovernanceMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminMemberController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->query('type', 'bot');
        if (!array_key_exists($type, GovernanceMember::TYPES)) {
            $type = 'bot';
        }

        $members = GovernanceMember::type($type)->ordered()->get();

        return view('admin.members.index', compact('members', 'type'));
    }

    public function create(Request $request)
    {
        $type = $request->query('type', 'bot');
        if (!array_key_exists($type, GovernanceMember::TYPES)) {
            $type = 'bot';
        }

        return view('admin.members.create', compact('type'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type'       => ['required', 'in:bot,council'],
            'name'       => ['required', 'string', 'max:255'],
            'role'       => ['nullable', 'string', 'max:255'],
            'initials'   => ['nullable', 'string', 'max:6'],
            'photo'      => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:4096'],
            'bio'        => ['nullable', 'string', 'max:2000'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $member = new GovernanceMember();
        $member->type       = $data['type'];
        $member->name       = $data['name'];
        $member->role       = $data['role'] ?: 'Member';
        $member->initials   = $data['initials'] ?: $this->deriveInitials($data['name']);
        $member->bio        = $data['bio'] ?? null;
        $member->sort_order = (int) ($data['sort_order'] ?? 0);
        $member->is_active  = $request->boolean('is_active');

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $member->photo = $this->storePhoto($request, $data['type']);
        }

        $member->save();

        return redirect()->route('admin.members.index', ['type' => $member->type])
            ->with('success', 'Member added successfully.');
    }

    public function edit(GovernanceMember $member)
    {
        return view('admin.members.edit', compact('member'));
    }

    public function update(Request $request, GovernanceMember $member)
    {
        $data = $request->validate([
            'type'       => ['required', 'in:bot,council'],
            'name'       => ['required', 'string', 'max:255'],
            'role'       => ['nullable', 'string', 'max:255'],
            'initials'   => ['nullable', 'string', 'max:6'],
            'photo'      => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:4096'],
            'bio'        => ['nullable', 'string', 'max:2000'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $typeChanged = $data['type'] !== $member->type;
        $oldFolder   = GovernanceMember::PHOTO_FOLDERS[$member->type] ?? 'img/board';

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $this->deletePhoto($member->photo, $oldFolder);
            $member->photo = $this->storePhoto($request, $data['type']);
        } elseif ($typeChanged && $member->photo) {
            // Keep the file with its type's folder when the member moves sections.
            $this->deletePhoto($member->photo, $oldFolder);
            $member->photo = null;
        }

        $member->type       = $data['type'];
        $member->name       = $data['name'];
        $member->role       = $data['role'] ?: 'Member';
        $member->initials   = $data['initials'] ?: $this->deriveInitials($data['name']);
        $member->bio        = $data['bio'] ?? null;
        $member->sort_order = (int) ($data['sort_order'] ?? 0);
        $member->is_active  = $request->boolean('is_active');
        $member->save();

        return redirect()->route('admin.members.index', ['type' => $member->type])
            ->with('success', 'Member updated successfully.');
    }

    public function destroy(GovernanceMember $member)
    {
        $folder = GovernanceMember::PHOTO_FOLDERS[$member->type] ?? 'img/board';
        $this->deletePhoto($member->photo, $folder);
        $member->delete();

        return redirect()->route('admin.members.index', ['type' => $member->type])
            ->with('success', 'Member deleted.');
    }

    /** Photos go to public/img/board (BOT) or public/img/council (Council). */
    private function storePhoto(Request $request, string $type): string
    {
        $file = $request->file('photo');
        $slug = Str::slug($request->input('name')) ?: 'member';
        $ext  = strtolower($file->getClientOriginalExtension() ?: 'jpg');

        $folder = GovernanceMember::PHOTO_FOLDERS[$type] ?? 'img/board';
        $dest   = public_path($folder);
        if (!File::isDirectory($dest)) {
            File::makeDirectory($dest, 0755, true);
        }

        $filename = $slug . '.' . $ext;
        if (File::exists($dest . DIRECTORY_SEPARATOR . $filename)) {
            $filename = $slug . '-' . uniqid() . '.' . $ext;
        }

        $file->move($dest, $filename);

        return $filename;
    }

    private function deletePhoto(?string $filename, string $folder): void
    {
        if (!$filename) {
            return;
        }

        $path = public_path($folder . DIRECTORY_SEPARATOR . basename($filename));
        if (File::exists($path)) {
            File::delete($path);
        }
    }

    private function deriveInitials(string $name): ?string
    {
        $titles = ['dr', 'prof', 'professor', 'mr', 'mrs', 'ms', 'miss', 'alhaji', 'alhaja',
                   'imam', 'engr', 'engineer', 'chief', 'mallam', 'malam', 'aare', 'oye',
                   'emeritus', 'vice', 'admiral', 'distinguished'];

        $significant = [];
        foreach (preg_split('/\s+/', trim($name)) as $word) {
            $word = trim($word, '.,');
            if ($word === '' || in_array(strtolower($word), $titles, true)) {
                continue;
            }
            $significant[] = $word;
            if (count($significant) === 2) {
                break;
            }
        }

        if (!$significant) {
            return null;
        }

        return mb_strtoupper(
            mb_substr($significant[0], 0, 1) . mb_substr($significant[1] ?? '', 0, 1)
        );
    }
}
