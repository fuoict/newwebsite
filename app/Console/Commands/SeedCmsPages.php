<?php

namespace App\Console\Commands;

use App\Models\Page;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SeedCmsPages extends Command
{
    protected $signature = 'seed:cms-pages';
    protected $description = 'Create CMS page records for the main public routes so they appear in the admin manager.';

    public function handle()
    {
        $routeContents = file_get_contents(base_path('routes/web.php')) ?: '';
        preg_match_all(
            '/Route::get\(\s*["\']([^"\']+)["\']\s*,\s*\[\s*(?:App\\\\Http\\\\Controllers\\\\)?PagesController::class\s*,\s*["\']([^"\']+)["\']\s*\]/',
            $routeContents,
            $matches,
            PREG_SET_ORDER
        );

        $slugs = [];
        foreach ($matches as $match) {
            $path = $match[1] ?? null;
            if ($path === null || $path === '/' || str_contains($path, '{') || str_contains($path, '}') || str_contains($path, '/admin') || str_contains($path, '/pages/') || str_contains($path, '/news/')) {
                continue;
            }

            $slugs[] = ltrim($path, '/');
        }

        $slugs = array_values(array_unique(array_filter($slugs)));

        $created = 0;
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

        $viewMap = [
            'about' => 'pages.about',
            'appraisal' => 'pages.theuniversity.appraisal',
            'alumni' => 'pages.alumni',
            'contact' => 'pages.contact',
            'faq' => 'pages.faq',
            'gallery' => 'pages.theuniversity.our-gallery',
            'the-university-library' => 'pages.theuniversity.the-university-library',
            'about-board-of-trustee' => 'pages.theuniversity.about-board-of-trustee',
            'about-governing-council' => 'pages.theuniversity.about-governing-council',
            'director-of-council' => 'pages.theuniversity.director-of-council',
            'member-of-council' => 'pages.theuniversity.profile-member-bot',
            'decision-extract' => 'pages.theuniversity.decision-extract',
            'commmittee-of-council' => 'pages.theuniversity.committee-of-council',
            'schedule-of-meetings' => 'pages.theuniversity.schedule-of-meeting',
            'the-senate' => 'pages.theuniversity.the-senate',
            'congregation' => 'pages.theuniversity.congregation',
            'the-vice-chancellor' => 'pages.theuniversity.office-of-the-vice-chancellor',
            'the-dvc' => 'pages.theuniversity.office-of-the-dvc',
            'the-registrar' => 'pages.theuniversity.office-of-the-registrar',
            'the-bursar' => 'pages.theuniversity.office-of-the-bursar',
            'the-librarian' => 'pages.theuniversity.office-of-the-librarian',
            'our-campus' => 'pages.theuniversity.our-campus',
            'our-gallery' => 'pages.theuniversity.our-gallery',
            'staff-downloads' => 'pages.theuniversity.staff-downloads',
            'students-download' => 'pages.theuniversity.students-download',
            'general-download' => 'pages.theuniversity.general-download',
            'subdegree-programme' => 'pages.academics.subdegrees-programme',
            'undergradute-programme' => 'pages.academics.undergradute-programme',
            'postgraduate-programme' => 'pages.academics.postgraduate-programme',
            'the-dean-of-spgs' => 'pages.academics.spgs-dean',
            'our-staff' => 'pages.academics.our-staff',
            'admission-requirement' => 'pages.admissions.admission-requirement',
            'spgs-applications' => 'pages.admissions.spgs-application',
            'undergraduate-applications' => 'pages.admissions.undergraduate-applications',
            'sandwich-applications' => 'pages.admissions.sandwich-application',
            'consultancy' => 'pages.divisions.centres.consultancy',
            'fucrit' => 'pages.divisions.centres.fucrit',
            'spiritual-growth' => 'pages.divisions.centres.spiritual-growth',
            'linkages' => 'pages.divisions.centres.linkages',
            'arabic-islamic-research' => 'pages.divisions.centres.arabic-islamic-research',
            'sandwich' => 'pages.divisions.centres.sandwich',
            'subdegree' => 'pages.divisions.centres.sub-degree',
            'entrepreneurship' => 'pages.divisions.centres.entrepreneurship',
        ];

        foreach ($slugs as $slug) {
            $seedContent = $this->getSeedContent($slug, $viewMap);

            $page = Page::firstOrCreate(
                ['slug' => $slug],
                [
                    'title' => Str::title(str_replace('-', ' ', $slug)),
                    'slug' => $slug,
                    'status' => 'published',
                    'template' => in_array($slug, $centreSlugs, true) ? 'centre' : null,
                    'content' => $seedContent,
                    'published_at' => now(),
                ]
            );

            if ($page->wasRecentlyCreated) {
                $created++;
            }

            $updates = [];

            if (in_array($slug, $centreSlugs, true)) {
                $updates['template'] = 'centre';
            }

            if (trim((string) $page->content) === '') {
                $updates['content'] = $seedContent;
            }

            if ($updates !== []) {
                $page->update($updates);
            }
        }

        $this->info("CMS pages seeded. Created {$created} new page record(s).");

        return self::SUCCESS;
    }

    protected function getSeedContent(string $slug, array $viewMap): string
    {
        $view = $viewMap[$slug] ?? null;

        if ($view === null) {
            return '';
        }

        $viewPath = resource_path('views/' . str_replace('.', '/', $view) . '.blade.php');

        if (!File::exists($viewPath)) {
            return '';
        }

        $contents = File::get($viewPath);
        $contents = preg_replace('/{{--.*?--}}/s', '', $contents) ?? $contents;
        $contents = preg_replace('/\{\{\s*.*?\s*\}\}/s', '', $contents) ?? $contents;
        $contents = preg_replace('/^\s*@(?:extends|section|endsection|push|endpush|yield|php|endphp|include|foreach|endforeach|if|endif|for|endfor|while|endwhile|forelse|empty|endforelse|isset|endisset|unless|endunless|auth|guest|endauth|can|endcan|switch|case|default|endswitch|once|endonce|slot|endslot|component|endcomponent)\b.*$/m', '', $contents) ?? $contents;
        $contents = preg_replace('/\R+/', "\n", $contents);

        return trim($contents);
    }
}
