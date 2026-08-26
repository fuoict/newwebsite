<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('updated_at', 'desc')->paginate(12);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create', [
            'editorData' => ['intro' => '', 'blocks' => []],
        ]);
    }

    public function store(PageRequest $request)
    {
        $validated = $request->validated();
        $validated['content'] = $request->has('content')
            ? (string) $request->input('content')
            : $this->buildPageContent($request);
        $validated['images'] = $this->normalizeImages($request->input('images', []));
        $validated['template'] = $validated['template'] ?? $this->getTemplateForSlug($validated['slug']);

        Page::create($validated);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page created successfully.');
    }

    public function show(Page $page)
    {
        return redirect()->route('admin.pages.edit', $page);
    }

    public function edit(Page $page)
    {
        $editorData = $this->prepareEditorData($page);

        return view('admin.pages.edit', compact('page', 'editorData'));
    }

    public function update(PageRequest $request, Page $page)
    {
        $validated = $request->validated();
        $validated['content'] = $request->has('content')
            ? (string) $request->input('content')
            : $this->buildPageContent($request);
        $validated['images'] = $this->normalizeImages($request->input('images', []));
        $validated['template'] = $validated['template'] ?? $this->getTemplateForSlug($validated['slug']);

        $page->update($validated);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page deleted successfully.');
    }

    protected function prepareEditorData(Page $page): array
    {
        $content = trim((string) $page->content);

        if ($content === '') {
            return ['intro' => '', 'blocks' => []];
        }

        $blocks = [];
        preg_match_all('/<h[3-6]>(.*?)<\/h[3-6]>(.*?)(?=<h[3-6]>|$)/si', $content, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $heading = trim(strip_tags($match[1]));
            $body = trim(strip_tags($match[2]));
            if ($heading === '' && $body === '') {
                continue;
            }
            $blocks[] = [
                'heading' => $heading,
                'body' => preg_replace('/\s+/', ' ', $body),
            ];
        }

        $intro = trim(strip_tags(preg_replace('/<h[3-6]>.*?<\/h[3-6]>(.*?)(?=<h[3-6]>|$)/si', '', $content)));

        return [
            'intro' => $intro,
            'blocks' => $blocks,
        ];
    }

    protected function buildPageContent($request): string
    {
        $sections = [];
        $intro = trim((string) $request->input('intro_content', ''));
        if ($intro !== '') {
            $sections[] = '<p>' . e($intro) . '</p>';
        }

        $blocks = $request->input('content_blocks', []);
        if (is_array($blocks)) {
            foreach ($blocks as $block) {
                if (!is_array($block)) {
                    continue;
                }

                $heading = trim((string) ($block['heading'] ?? ''));
                $body = trim((string) ($block['body'] ?? ''));
                if ($heading === '' && $body === '') {
                    continue;
                }

                $html = '';
                if ($heading !== '') {
                    $html .= '<h3>' . e($heading) . '</h3>';
                }
                if ($body !== '') {
                    $html .= '<p>' . nl2br(e($body)) . '</p>';
                }

                $sections[] = $html;
            }
        }

        return implode("\n", $sections);
    }

    protected function getTemplateForSlug(string $slug): ?string
    {
        $centreSlugs = [
            'consultancy',
            'fucrit',
            'spiritual-growth',
            'linkages',
            'arabic-islamic-research',
            'sandwich',
            'subdegree',
            'entrepreneurship',
        ];

        return in_array($slug, $centreSlugs, true) ? 'centre' : null;
    }

    protected function normalizeImages($images): array
    {
        if (is_string($images)) {
            $trimmed = trim($images);

            if ($trimmed === '') {
                return [];
            }

            $decoded = json_decode($trimmed, true);
            if (is_array($decoded)) {
                $images = $decoded;
            } else {
                $images = preg_split('/\r\n|\r|\n/', $trimmed) ?: [];
            }
        }

        if (!is_array($images)) {
            return [];
        }

        return array_values(array_filter(array_map(function ($image) {
            if (is_array($image)) {
                $path = trim((string) ($image['path'] ?? ''));
                return $path !== '' ? ['path' => $path] : null;
            }

            $path = trim((string) $image);
            return $path !== '' ? ['path' => $path] : null;
        }, $images)));
    }

    // Return all pages as JSON (useful for API/debug/testing)
    public function all()
    {
        return response()->json(Page::orderBy('updated_at', 'desc')->get());
    }
}
