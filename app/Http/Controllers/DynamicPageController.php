<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\VcSpeech;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->where('is_active', true)->firstOrFail();

        // Get sidebar links for this page
        $sidebarLinks = $this->getSidebarLinks($page);

        // Get speeches for VC page
        $speeches = null;
        if ($page->route_name === 'the-vice-chancellor') {
            $speeches = VcSpeech::all();
        }

        // Get spotlight images for VC page
        $spotlightImages = [];
        if ($page->route_name === 'the-vice-chancellor') {
            $spotlightImages = $this->getSpotlightImages();
        }

        return view('pages.dynamic.show', compact('page', 'sidebarLinks', 'speeches', 'spotlightImages'));
    }

    private function getSidebarLinks(Page $page): array
    {
        if ($page->sidebar_links) {
            return $page->sidebar_links;
        }

        // Default sidebar links based on section
        $sectionPages = Page::where('section', $page->section)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return $sectionPages->map(fn($p) => [
            'label' => $p->title,
            'url' => route('pages.show', $p->slug),
            'active' => $p->id === $page->id,
        ])->toArray();
    }

    private function getSpotlightImages(): array
    {
        $spotlightFolder = public_path('img/vc-spotlight');
        $images = [];

        if (is_dir($spotlightFolder)) {
            $files = glob($spotlightFolder . '/*.{jpg,jpeg,png,webp,gif}', GLOB_BRACE);
            sort($files, SORT_NATURAL | SORT_FLAG_CASE);
            foreach ($files as $filePath) {
                if (is_file($filePath)) {
                    $images[] = ['src' => 'img/vc-spotlight/' . basename($filePath), 'caption' => ''];
                }
            }
        }

        if (empty($images)) {
            $images = [
                ['src' => 'img/gallery/m2.jpg', 'caption' => 'Leading a student-success roundtable'],
                ['src' => 'img/gallery/m3.jpg', 'caption' => 'Speaking at the university convocation'],
                ['src' => 'img/gallery/m4.jpg', 'caption' => 'Meeting with staff and guests'],
            ];
        }

        return $images;
    }
}
