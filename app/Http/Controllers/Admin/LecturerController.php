<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\College;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LecturerController extends Controller
{
    public function index(Request $request)
    {
        $query = Lecturer::with(['college', 'department'])->ordered();

        if ($request->filled('department_id')) {
            $query->where('department_id', $request->department_id);
        }
        if ($request->filled('college_id')) {
            $query->where('college_id', $request->college_id);
        }
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $perPage = (int) $request->input('per_page', 20);
        $perPage = in_array($perPage, [20, 50, 100], true) ? $perPage : 20;

        $lecturers   = $query->paginate($perPage)->appends($request->query());
        $colleges    = College::orderBy('college_name')->get();
        $departments = Department::orderBy('department_name')->get();

        return view('admin.lecturers.index', compact('lecturers', 'colleges', 'departments', 'perPage'));
    }

    public function downloadTemplate()
    {
        $headers = [
            'name',
            'title',
            'position',
            'specialization',
            'department_name',
            'college_name',
            'email',
            'phone',
            'qualifications',
            'research_interest',
            'biography',
            'google_scholar',
            'researchgate',
            'linkedin',
            'twitter',
            'orcid',
            'scopus',
            'wos',
            'publons',
            'ad_scientific',
            'academia_edu',
            'linktree',
            'personal_website',
            'is_published',
        ];

        $callback = function () use ($headers): void {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $headers);
            fputcsv($handle, [
                'Ada Lovelace',
                'Dr.',
                'Senior Lecturer',
                'Algorithms',
                'Computer Science',
                'College of Computing',
                'ada@example.com',
                '08012345678',
                'PhD in Computer Science',
                'Algorithms and Computability',
                'Example biography',
                'https://scholar.google.com/citations?user=example',
                'https://www.researchgate.net/profile/example',
                'https://www.linkedin.com/in/example',
                'https://x.com/example',
                'https://orcid.org/0000-0000-0000-0000',
                'https://www.scopus.com/authid/detail.uri?authorId=example',
                'https://www.webofscience.com/wos/author/record/example',
                'https://publons.com/researcher/example',
                'https://www.adscientificindex.com/scientist/example',
                'https://independent.academia.edu/example',
                'https://linktr.ee/example',
                'https://example.com',
                'true',
            ]);
            fclose($handle);
        };

        return response()->stream($callback, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="lecturers-import-template.csv"',
        ]);
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => ['required', 'file', 'mimes:csv,json,txt', 'max:2048'],
            'format' => ['nullable', 'in:csv,json'],
        ]);

        $file = $request->file('import_file');
        $rows = $this->parseImportFile($file, $request->input('format'));

        $imported = 0;

        foreach ($rows as $row) {
            $record = $this->normalizeImportRow($row);

            if (empty($record['name'])) {
                continue;
            }

            Lecturer::create([
                'title' => $record['title'] ?? null,
                'name' => $record['name'],
                'position' => $record['position'] ?? null,
                'specialization' => $record['specialization'] ?? null,
                'college_id' => $this->resolveCollegeId($record),
                'department_id' => $this->resolveDepartmentId($record),
                'email' => $record['email'] ?? null,
                'phone' => $record['phone'] ?? null,
                'biography' => $record['biography'] ?? null,
                'qualifications' => $record['qualifications'] ?? null,
                'research_interest' => $record['research_interest'] ?? null,
                'google_scholar' => $record['google_scholar'] ?? null,
                'researchgate' => $record['researchgate'] ?? null,
                'linkedin' => $record['linkedin'] ?? null,
                'twitter' => $record['twitter'] ?? null,
                'personal_website' => $record['personal_website'] ?? null,
                'orcid' => $record['orcid'] ?? null,
                'academia_edu' => $record['academia_edu'] ?? null,
                'linktree' => $record['linktree'] ?? null,
                'scopus' => $record['scopus'] ?? null,
                'wos' => $record['wos'] ?? null,
                'publons' => $record['publons'] ?? null,
                'ad_scientific' => $record['ad_scientific'] ?? null,
                'is_hod' => false,
                'is_published' => $this->toBoolean($record['is_published'] ?? true),
                'sort_order' => (int) ($record['sort_order'] ?? 0),
            ]);

            $imported++;
        }

        $message = $imported > 0
            ? "Imported {$imported} lecturers successfully."
            : 'No lecturers were imported.';

        return redirect()->route('admin.lecturers.index')->with('success', $message);
    }

    private function parseImportFile($file, ?string $format): array
    {
        $contents = $file->get();
        $format = strtolower($format ?? $this->detectFormat($file));

        if ($format === 'json') {
            $decoded = json_decode($contents, true);
            if (!is_array($decoded)) {
                return [];
            }

            return array_is_list($decoded) ? $decoded : [$decoded];
        }

        $rows = [];
        $handle = fopen('php://temp', 'r+');
        if ($handle === false) {
            return [];
        }

        fwrite($handle, $contents);
        rewind($handle);

        $header = fgetcsv($handle);
        if ($header === false) {
            fclose($handle);
            return [];
        }

        while (($row = fgetcsv($handle)) !== false) {
            if (empty(array_filter($row, fn ($value) => $value !== null && $value !== ''))) {
                continue;
            }

            $rows[] = array_combine($header, $row);
        }

        fclose($handle);

        return $rows;
    }

    private function detectFormat($file): string
    {
        $extension = strtolower($file->getClientOriginalExtension());
        return $extension === 'json' ? 'json' : 'csv';
    }

    private function normalizeImportRow(array $row): array
    {
        $normalized = [];
        foreach ($row as $key => $value) {
            $normalized[trim(strtolower((string) $key))] = is_string($value) ? trim($value) : $value;
        }

        $normalized['name'] = $this->valueByKeys($normalized, ['name', 'full_name', 'full name', 'lecturer_name', 'lecturer name', 'staff_name', 'person name', '']);
        $normalized['position'] = $this->valueByKeys($normalized, ['position', 'present level/position', 'present_level/position', 'present level position', 'present_level_position']);
        $normalized['specialization'] = $this->valueByKeys($normalized, ['specialization', 'area of specialization', 'area_of_specialization']);
        $normalized['qualifications'] = $this->valueByKeys($normalized, ['qualifications', 'academic qualification', 'academic_qualification']);
        $normalized['research_interest'] = $this->valueByKeys($normalized, ['research_interest', 'research interest']);
        $normalized['biography'] = $this->valueByKeys($normalized, ['biography', 'brief biography', 'brief_biography']);
        $normalized['department_name'] = $this->valueByKeys($normalized, ['department_name', 'department', 'dept_name', 'department name']);
        $normalized['college_name'] = $this->valueByKeys($normalized, ['college_name', 'college', 'college_abbr', 'college name']);
        $normalized['email'] = $this->extractEmail($normalized);
        $normalized['phone'] = $this->extractPhone($normalized);
        $normalized['is_published'] = $normalized['is_published'] ?? $normalized['published'] ?? true;

        return $normalized;
    }

    private function valueByKeys(array $record, array $keys): ?string
    {
        foreach ($keys as $key) {
            if (!array_key_exists($key, $record)) {
                continue;
            }

            $value = $record[$key];
            if (is_string($value)) {
                $value = trim($value);
                if ($value !== '') {
                    return $value;
                }
            } elseif (!empty($value)) {
                return (string) $value;
            }
        }

        return null;
    }

    private function extractEmail(array $record): ?string
    {
        foreach ($record as $value) {
            if (!is_string($value)) {
                continue;
            }

            if (preg_match('/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/i', $value, $matches)) {
                return $matches[0];
            }
        }

        return null;
    }

    private function extractPhone(array $record): ?string
    {
        foreach ($record as $value) {
            if (!is_string($value)) {
                continue;
            }

            if (preg_match('/\+?\d[\d\-\s\(\)]{7,}/', $value, $matches)) {
                return trim($matches[0]);
            }
        }

        return null;
    }

    private function resolveDepartmentId(array $record): ?int
    {
        if (!empty($record['department_id']) && is_numeric($record['department_id'])) {
            return (int) $record['department_id'];
        }

        $name = $record['department_name'] ?? $record['department'] ?? null;
        if (!$name) {
            return null;
        }

        $department = Department::where('department_name', 'like', trim($name))->first();

        return $department?->id;
    }

    private function resolveCollegeId(array $record): ?int
    {
        if (!empty($record['college_id']) && is_numeric($record['college_id'])) {
            return (int) $record['college_id'];
        }

        $name = $record['college_name'] ?? $record['college'] ?? null;
        if (!$name) {
            return null;
        }

        $college = College::where('college_name', 'like', trim($name))
            ->orWhere('college_abbr', 'like', trim($name))
            ->first();

        return $college?->id;
    }

    private function toBoolean($value): bool
    {
        if (is_bool($value)) {
            return $value;
        }

        if (is_int($value)) {
            return $value === 1;
        }

        if (is_numeric($value)) {
            return (int) $value === 1;
        }

        if (is_string($value)) {
            $value = strtolower(trim($value));
            return in_array($value, ['1', 'true', 'yes', 'on', 'y'], true);
        }

        return true;
    }

    public function create()
    {
        $colleges    = College::orderBy('college_name')->get();
        $departments = Department::orderBy('department_name')->get();
        $positions   = Lecturer::positions();
        return view('admin.lecturers.create', compact('colleges', 'departments', 'positions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'            => 'nullable|string|max:50',
            'name'             => 'required|string|max:255',
            'position'         => 'nullable|string|max:100',
            'specialization'   => 'nullable|string|max:255',
            'college_id'       => 'nullable|exists:colleges,id',
            'department_id'    => 'required|exists:departments,id',
            'email'            => 'nullable|email|max:255',
            'phone'            => 'nullable|string|max:30',
            'biography'        => 'nullable|string',
            'qualifications'   => 'nullable|string',
            'research_interest'=> 'nullable|string',
            'google_scholar'   => 'nullable|max:255',
            'researchgate'     => 'nullable|max:255',
            'linkedin'         => 'nullable|max:255',
            'twitter'          => 'nullable|max:255',
            'personal_website' => 'nullable|max:255',
            'orcid'            => 'nullable|string|max:100',
            'academia_edu'     => 'nullable|max:255',
            'linktree'         => 'nullable|max:255',
            'scopus'           => 'nullable|max:255',
            'wos'              => 'nullable|max:255',
            'publons'          => 'nullable|max:255',
            'ad_scientific'    => 'nullable|max:255',
            'sort_order'       => 'nullable|integer',
            'is_hod'           => 'nullable',
            'is_published'     => 'nullable',
            'photo'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('lecturers', 'public');
        }

        $validated['is_hod']       = $request->boolean('is_hod');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order']   = $validated['sort_order'] ?? 0;

        Lecturer::create($validated);

        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Lecturer profile created successfully!');
    }

    public function edit(Lecturer $lecturer)
    {
        $colleges    = College::orderBy('college_name')->get();
        $departments = Department::orderBy('department_name')->get();
        $positions   = Lecturer::positions();
        return view('admin.lecturers.edit', compact('lecturer', 'colleges', 'departments', 'positions'));
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $validated = $request->validate([
            'title'            => 'nullable|string|max:50',
            'name'             => 'required|string|max:255',
            'position'         => 'nullable|string|max:100',
            'specialization'   => 'nullable|string|max:255',
            'college_id'       => 'nullable|exists:colleges,id',
            'department_id'    => 'required|exists:departments,id',
            'email'            => 'nullable|email|max:255',
            'phone'            => 'nullable|string|max:30',
            'biography'        => 'nullable|string',
            'qualifications'   => 'nullable|string',
            'research_interest'=> 'nullable|string',
            'google_scholar'   => 'nullable|max:255',
            'researchgate'     => 'nullable|max:255',
            'linkedin'         => 'nullable|max:255',
            'twitter'          => 'nullable|max:255',
            'personal_website' => 'nullable|max:255',
            'orcid'            => 'nullable|string|max:100',
            'academia_edu'     => 'nullable|max:255',
            'linktree'         => 'nullable|max:255',
            'scopus'           => 'nullable|max:255',
            'wos'              => 'nullable|max:255',
            'publons'          => 'nullable|max:255',
            'ad_scientific'    => 'nullable|max:255',
            'sort_order'       => 'nullable|integer',
            'is_hod'           => 'nullable',
            'is_published'     => 'nullable',
            'photo'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
        ]);

        if ($request->hasFile('photo')) {
            if ($lecturer->photo) {
                Storage::disk('public')->delete($lecturer->photo);
            }
            $validated['photo'] = $request->file('photo')->store('lecturers', 'public');
        } else {
            unset($validated['photo']);
        }

        $validated['is_hod']       = $request->boolean('is_hod');
        $validated['is_published'] = $request->boolean('is_published');

        $lecturer->update($validated);

        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Lecturer profile updated!');
    }

    public function destroy(Lecturer $lecturer)
    {
        if ($lecturer->photo) {
            Storage::disk('public')->delete($lecturer->photo);
        }
        $lecturer->delete();

        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Lecturer removed.');
    }

    public function bulkDestroy(Request $request)
    {
        $ids = $request->input('lecturer_ids');

        if (is_string($ids)) {
            $ids = array_values(array_filter(array_map('trim', explode(',', $ids))));
        } elseif (is_array($ids)) {
            $ids = array_values(array_filter(array_map('trim', $ids)));
        } else {
            $ids = [];
        }

        $request->validate([
            'lecturer_ids' => ['required'],
        ]);

        $validatedIds = collect($ids)->filter(fn ($id) => is_numeric($id))->map(fn ($id) => (int) $id)->unique()->values()->all();

        if (empty($validatedIds)) {
            return redirect()->route('admin.lecturers.index')
                ->with('warning', 'No lecturers were selected.');
        }

        $request->merge(['lecturer_ids' => $validatedIds]);

        $request->validate([
            'lecturer_ids' => ['required', 'array'],
            'lecturer_ids.*' => ['integer', 'exists:lecturers,id'],
        ]);

        $lecturers = Lecturer::whereIn('id', $validatedIds)->get();

        foreach ($lecturers as $lecturer) {
            if ($lecturer->photo) {
                Storage::disk('public')->delete($lecturer->photo);
            }
            $lecturer->delete();
        }

        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Selected lecturers removed.');
    }
}
