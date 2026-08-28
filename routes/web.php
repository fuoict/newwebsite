<?php

use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Http\Controllers\Admin\LecturerController as AdminLecturerController;
use App\Http\Controllers\Admin\AdminDepartmentNewsController;
use App\Http\Controllers\Admin\AdminFeaturedLinkController;
use App\Http\Controllers\Admin\AdminCourseSynopsisController;
use App\Http\Controllers\Admin\AdminCentreController;
use App\Http\Controllers\Admin\AdminUnitController;
use App\Http\Controllers\Admin\AdminCollegeController;
use App\Http\Controllers\Admin\AdminDepartmentController;
use App\Http\Controllers\Admin\AdminNavigationController;
use App\Http\Controllers\Admin\AdminAuditController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\DepartmentPageController;
use App\Http\Controllers\CentrePageController;
use App\Http\Controllers\UnitPageController;
use App\Http\Controllers\DynamicPageController;



// Route::get('/', function () {
//     // return view('welcome');
//     $featuredNews    = News::published()->featured()->latest()->limit(2)->get();
//     $sidebarFeatured = News::published()->featured()->latest()->skip(2)->first();
//     $sidebarSmall    = News::published()->latest()
//                             ->whereNotIn('id',
//                                 $featuredNews->pluck('id')
//                                 ->push(optional($sidebarFeatured)->id)
//                                 ->filter()->toArray()
//                             )->limit(3)->get();
//     return view('welcome', compact('featuredNews', 'sidebarFeatured', 'sidebarSmall'));
// });
// Route::get('/', function () {
//     $featuredNews    = News::published()->featured()->latest()->limit(2)->get();
//     $sidebarFeatured = News::published()->featured()->latest()->skip(2)->first();
//     $sidebarSmall    = News::published()->latest()
//                             ->whereNotIn('id',
//                                 $featuredNews->pluck('id')
//                                 ->push(optional($sidebarFeatured)->id)
//                                 ->filter()->toArray()
//                             )->limit(3)->get();

//     // Daily Hadith — cached for 24 hours, fetched from API once per day
//     $hadith = cache()->remember('daily_hadith', 86400, function () {
//         try {
//             $response = file_get_contents('https://random-hadith-generator.vercel.app/bukhari/');
//             $data = json_decode($response, true);
//             return [
//                 'text'      => $data['data']['hadith_english'] ?? 'Seek knowledge from the cradle to the grave.',
//                 'narrator'  => $data['data']['header'] ?? '',
//                 'reference' => 'Sahih al-Bukhari',
//             ];
//         } catch (\Exception $e) {
//             return [
//                 'text'      => 'The best of you are those who learn the Quran and teach it.',
//                 'narrator'  => '',
//                 'reference' => 'Sahih al-Bukhari 5027', 
//             ];
//         }
//     });

//     return view('welcome', compact('featuredNews', 'sidebarFeatured', 'sidebarSmall', 'hadith'));
// });
Route::get('/', function () {
    $featuredNews    = News::published()->featured()->latest()->limit(2)->get();
    $sidebarFeatured = News::published()->featured()->latest()->skip(2)->first();
    $sidebarSmall    = News::published()->latest()
        ->whereNotIn(
            'id',
            $featuredNews->pluck('id')
                ->push(optional($sidebarFeatured)->id)
                ->filter()
                ->toArray()
        )
        ->limit(3)
        ->get();

    $hadith = cache()->remember('daily_hadith_' . date('Y-m-d'), 86400, function () {
        try {
            // Randomize category and page for variety
            $categories = [1, 2, 3, 5, 7, 10, 15, 20, 30, 40];
            $randCat = $categories[array_rand($categories)];
            $randPage = rand(1, 5);

            // Primary: hadeethenc.com API — get a random hadith from a random category
            $listRes = \Illuminate\Support\Facades\Http::timeout(5)
                ->get("https://hadeethenc.com/api/v1/hadeeths/list/?language=en&category_id={$randCat}&page={$randPage}&per_page=1");

            if ($listRes->successful()) {
                $listData = $listRes->json();
                $hadithId = $listData['data'][0]['id'] ?? null;

                if ($hadithId) {
                    $detailRes = \Illuminate\Support\Facades\Http::timeout(5)
                        ->get("https://hadeethenc.com/api/v1/hadeeths/one/?language=en&id={$hadithId}");

                    if ($detailRes->successful()) {
                        $detail = $detailRes->json();
                        return [
                            'text'      => $detail['hadeeth'] ?? '',
                            'narrator'  => $detail['hadeeth_intro'] ?? '',
                            'reference' => $detail['attribution'] ?? 'Hadeeth Enc',
                        ];
                    }
                }
            }

            // Backup: try another random category
            $randCat2 = $categories[array_rand($categories)];
            $randPage2 = rand(1, 3);
            $backupList = \Illuminate\Support\Facades\Http::timeout(5)
                ->get("https://hadeethenc.com/api/v1/hadeeths/list/?language=en&category_id={$randCat2}&page={$randPage2}&per_page=1");

            if ($backupList->successful()) {
                $bData = $backupList->json();
                $bId = $bData['data'][0]['id'] ?? null;
                if ($bId) {
                    $bDetail = \Illuminate\Support\Facades\Http::timeout(5)
                        ->get("https://hadeethenc.com/api/v1/hadeeths/one/?language=en&id={$bId}");
                    if ($bDetail->successful()) {
                        $bd = $bDetail->json();
                        return [
                            'text'      => $bd['hadeeth'] ?? '',
                            'narrator'  => $bd['hadeeth_intro'] ?? '',
                            'reference' => $bd['attribution'] ?? 'Hadeeth Enc',
                        ];
                    }
                }
            }
        } catch (\Exception $e) {
            // API failed, use fallback
        }

        $fallbacks = [
            ['text' => 'The best of you are those who learn the Quran and teach it.', 'reference' => 'Sahih al-Bukhari 5027'],
            ['text' => 'Actions are judged by intentions, and every person will get the reward according to what he has intended.', 'reference' => 'Sahih al-Bukhari 1'],
            ['text' => 'Whoever believes in Allah and the Last Day should speak good or remain silent.', 'reference' => 'Sahih al-Bukhari 6018'],
            ['text' => 'Make things easy and do not make them difficult, cheer people up and do not drive them away.', 'reference' => 'Sahih al-Bukhari 69'],
            ['text' => 'The strong person is not the one who can wrestle someone else down. The strong person is the one who can control himself when he is angry.', 'reference' => 'Sahih al-Bukhari 6114'],
            ['text' => 'Seeking knowledge is an obligation upon every Muslim.', 'reference' => 'Ibn Majah 224'],
            ['text' => 'The world is a prison for the believer and a paradise for the disbeliever.', 'reference' => 'Sahih Muslim 2956'],
        ];

        $index = array_rand($fallbacks);

        return [
            'text'      => $fallbacks[$index]['text'],
            'narrator'  => '',
            'reference' => $fallbacks[$index]['reference'],
        ];
    });

    return view('welcome', compact('featuredNews', 'sidebarFeatured', 'sidebarSmall', 'hadith'));
});

Route::get('/centres', [CentrePageController::class, 'index'])->name('centres');
Route::get('/centres/{slug}', [CentrePageController::class, 'show'])->name('centres.show');
Route::get('/university/{slug}', [DynamicPageController::class, 'show'])->name('pages.show');
Route::get('/units', [UnitPageController::class, 'index'])->name('units');
Route::get('/units/{slug}', [UnitPageController::class, 'show'])->name('units.show');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/appraisal', [PagesController::class, 'appraisal'])->name('appraisal');
// Route::get('/about-board-of-trustee', [PagesControll]);

Route::get('/alumni', [PagesController::class, 'alumni'])->name('alumni');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/the-university-library', [PagesController::class, 'theUniversityLibrary'])->name('the-university-library');

Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/gallery', [PagesController::class, 'ourGallery'])->name('gallery');
Route::get('/about-board-of-trustee', [PagesController::class, 'aboutBoardOfTrustee'])->name('about-bot');
Route::get('/profile-board-of-trustee', [PagesController::class, 'profileBOT'])->name('fuo-bot-profile');
Route::get('/about-governing-council', [PagesController::class, 'aboutGoverningCouncil'])->name('about-governing-council');
Route::get('/director-of-council', [PagesController::class, 'dirOfCouncil'])->name('director-of-council');
Route::get('/member-of-council', [PagesController::class, 'memberOfCouncil'])->name('member-of-council');
Route::get('/decision-extract', [PagesController::class, 'decisionExtract'])->name('decision-extract');
Route::get('/commmittee-of-council', [PagesController::class, 'commiteeOfCouncil'])->name('commmittee-of-council');
Route::get('/schedule-of-meetings', [PagesController::class, 'scheduleOfMeetings'])->name('schedule-of-meetings');
Route::get('/the-senate', [PagesController::class, 'theSenate'])->name('the-senate');
Route::get('/congregation', [PagesController::class, 'congregation'])->name('congregation');
Route::get('/the-vice-chancellor', [PagesController::class, 'theViceChancellor'])->name('the-vice-chancellor');
Route::get('/the-dvc', [PagesController::class, 'theDVC'])->name('the-dvc');
Route::get('/the-registrar', [PagesController::class, 'theRegistrar'])->name('the-registrar');
Route::get('/the-bursar', [PagesController::class, 'theBursar'])->name('the-bursar');
Route::get('/the-librarian', [PagesController::class, 'theLibrarian'])->name('the-librarian');
Route::get('/our-campus', [PagesController::class, 'ourCampus'])->name('our-campus');
Route::get('/campus-life', function () { return view('campus-life'); })->name('campus-life');
Route::get('/global-ranking-impact', function () { return view('global-ranking-impact'); })->name('global-ranking-impact');

// ── Sitemap ──────────────────────────────────────────────────────────────
Route::get('/sitemap.xml', function () {
    $url         = config('app.url', 'https://fuo.edu.ng');
    $lastMod     = date('Y-m-d');

    // Static pages
    $staticPages = [
        '/'                        => '2025-08-27',
        '/about'                   => '2025-08-27',
        '/campus-life'             => '2025-08-27',
        '/global-ranking-impact'   => '2025-08-27',
        '/admission-requirement'   => '2025-08-27',
        '/contact'                 => '2025-08-27',
        '/gallery'                 => '2025-08-27',
        '/faq'                     => '2025-08-27',
        '/colleges'                => '2025-08-27',
        '/undergradute-programme'  => '2025-08-27',
        '/postgraduate-programme'  => '2025-08-27',
        '/our-campus'              => '2025-08-27',
        '/inaugural-lectures'      => '2025-08-27',
        '/annual-report'           => '2025-08-27',
        '/news'                    => '2025-08-27',
    ];

    // Dynamic news
    $newsItems = \App\Models\News::published()->latest()->limit(100)->get(['slug', 'updated_at']);

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    foreach ($staticPages as $path => $mod) {
        $xml .= '  <url>' . "\n";
        $xml .= '    <loc>' . $url . $path . '</loc>' . "\n";
        $xml .= '    <lastmod>' . $mod . '</lastmod>' . "\n";
        $xml .= '    <changefreq>' . ($path === '/' ? 'daily' : 'weekly') . '</changefreq>' . "\n";
        $xml .= '    <priority>' . ($path === '/' ? '1.0' : '0.8') . '</priority>' . "\n";
        $xml .= '  </url>' . "\n";
    }

    foreach ($newsItems as $item) {
        $xml .= '  <url>' . "\n";
        $xml .= '    <loc>' . $url . '/news/' . $item->slug . '</loc>' . "\n";
        $xml .= '    <lastmod>' . $item->updated_at->format('Y-m-d') . '</lastmod>' . "\n";
        $xml .= '    <changefreq>weekly</changefreq>' . "\n";
        $xml .= '    <priority>0.6</priority>' . "\n";
        $xml .= '  </url>' . "\n";
    }

    $xml .= '</urlset>';

    return response($xml, 200)
        ->header('Content-Type', 'application/xml')
        ->header('Cache-Control', 'public, max-age=86400');
})->name('sitemap');

Route::get('/our-gallery', [PagesController::class, 'ourGallery'])->name('our-gallery');
Route::get('/staff-downloads', [PagesController::class, 'staffDownloads'])->name('staff-downloads');
Route::get('/students-download', [PagesController::class, 'studentDownloads'])->name('students-download');
Route::get('/pg-download', [PagesController::class, 'postgraduateStudentDownload'])->name('pg-download');
Route::get('/general-download', [PagesController::class, 'generalDownloads'])->name('general-download');
Route::get('/sub-degree-programme', [PagesController::class, 'subDegrees'])->name('subdegree-programme');
Route::get('/undergradute-programme', [PagesController::class, 'underGraduate'])->name('undergradute-programme');
Route::get('/postgraduate-programme', [PagesController::class, 'postGraduate'])->name('postgraduate-programme');
Route::get('/the-dean-of-postgraduate-schools', [PagesController::class, 'spgsDean'])->name('the-dean-of-spgs');
Route::get('/our-staff', [PagesController::class, 'ourStaff'])->name('our-staff');
Route::get('/admission-requirement', [PagesController::class, 'admissionRequirement'])->name('admission-requirement');
Route::get('/school-of-postgraduate-applications', [PagesController::class, 'spgsApplications'])->name('spgs-applications');
Route::get('/undergraduate-applications', [PagesController::class, 'underGraduateApplications'])->name('undergraduate-applications');
Route::get('/sandwich-applications', [PagesController::class, 'sandWichApplications'])->name('sandwich-applications');
Route::get('/colleges', [PagesController::class, 'colleges'])->name('colleges');
Route::get('/colleges/{slug}', [PagesController::class, 'colleges'])->name('colleges.show');
Route::get('/departments/{slug}', [PagesController::class, 'departments'])->name('department');
Route::get('/departments/{slug}/page/{link}', [DepartmentPageController::class, 'page'])->name('department.page');
Route::get('/departments/{slug}/news', [DepartmentPageController::class, 'news'])->name('department.news');
Route::get('/departments/{slug}/news/{news}', [DepartmentPageController::class, 'newsShow'])->name('department.news.show');
Route::get('/departments/{slug}/courses', [DepartmentPageController::class, 'courses'])->name('department.courses');
Route::get('/lecturers/{lecturer}', [LecturerController::class, 'show'])->name('lecturer.show');
Route::get('/scentres', [PagesController::class, 'units'])->name('scentres');
Route::get('/inaugural-lectures', [PagesController::class, 'inauguralLectures'])->name('inaugural-lectures');
Route::get('/annual-report', [PagesController::class, 'annualReport'])->name('annual-report');
Route::get('/fuo-chronicles', [PagesController::class, 'fuoChronicles'])->name('fuo-chronicles');

Route::get('/partnerships', [PagesController::class, 'partnerships'])->name('partnerships');
Route::get('/donors', [PagesController::class, 'donors'])->name('donors');
Route::get('/scholarships', [PagesController::class, 'scholarships'])->name('scholarships');
Route::get('/dignitaries', [PagesController::class, 'dignitaries'])->name('dignitaries');
Route::get('/honorary-doctorates', [PagesController::class, 'honoraryDoctorates'])->name('honorary-doctorates');
Route::get('/convocation-lecturers', [PagesController::class, 'convocationLecturers'])->name('convocation-lecturers');

// Old unit routes → redirect to database-driven pages
Route::get('/academic-planning-unit', fn () => redirect()->route('units.show', 'academic-planning-unit', 301))->name('academicplanning');
Route::get('/bursary-unit', fn () => redirect()->route('units.show', 'bursary-unit', 301))->name('bursary');
Route::get('/counselling-unit', fn () => redirect()->route('units.show', 'counselling-unit', 301))->name('counselling');
Route::get('/ict-unit', fn () => redirect()->route('units.show', 'ict-unit', 301))->name('ictunit');
Route::get('/internal-audit-unit', fn () => redirect()->route('units.show', 'internal-audit-unit', 301))->name('auditunit');
Route::get('/public-relation-unit', fn () => redirect()->route('units.show', 'public-relations-unit', 301))->name('prounit');
Route::get('/quality-assurance-unit', fn () => redirect()->route('units.show', 'quality-assurance-unit', 301))->name('qassurance');
Route::get('/registry-unit', fn () => redirect()->route('units.show', 'registry', 301))->name('registry');
Route::get('/siwes-unit', fn () => redirect()->route('units.show', 'siwes-unit', 301))->name('siwes');
Route::get('/sport-unit', fn () => redirect()->route('units.show', 'sports-unit', 301))->name('sports');
Route::get('/student-affairs-unit', fn () => redirect()->route('units.show', 'student-affairs-unit', 301))->name('student-affairs');


// Old centre routes → redirect to database-driven pages
Route::get('/consultancy', fn () => redirect()->route('centres.show', 'centre-for-consultancy-services', 301))->name('consultancy');
Route::get('/fucrit', fn () => redirect()->route('centres.show', 'centre-for-research-innovation-and-technology', 301))->name('fucrit');
Route::get('/spiritual-growth', fn () => redirect()->route('centres.show', 'centre-for-spiritual-growth-and-moral-excellence', 301))->name('spiritual-growth');
Route::get('/linkages', fn () => redirect()->route('centres.show', 'centre-for-linkages-and-advancement', 301))->name('linkages');
Route::get('/arabic-islamic-research', fn () => redirect()->route('centres.show', 'centre-for-arabic-and-islamic-research-translation-and-immersion-programme', 301))->name('arabic-islamic-research');
Route::get('/sandwich', fn () => redirect()->route('centres.show', 'centre-for-sandwich-programmes', 301))->name('sandwich');
Route::get('/subdegree', fn () => redirect()->route('centres.show', 'centre-for-sub-degree-and-professional-programmes', 301))->name('subdegree');
Route::get('/entrepreneurship', fn () => redirect()->route('centres.show', 'centre-for-entrepreneurship-and-skill-acquisition', 301))->name('entrepreneurship');



Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/dashboard', function () {
        return redirect()->route('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// ----------------------------------------------------------------
// ADMIN ROUTES — Protected by auth middleware
// ----------------------------------------------------------------
// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//     // Dashboard
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');

//     // STaff
//     Route::get('staff/create',            [AdminNewsController::class, 'createStaff'])->name('staff.create');
//     Route::get('staff/index',            [AdminNewsController::class, 'createStaff'])->name('staff.index');
//     // News CRUD
//     Route::get('/news',                   [AdminNewsController::class, 'index'])->name('news.index');
//     Route::get('/news/create',            [AdminNewsController::class, 'create'])->name('news.create');
//     Route::post('/news',                  [AdminNewsController::class, 'store'])->name('news.store');
//     Route::get('/news/{news}/edit',       [AdminNewsController::class, 'edit'])->name('news.edit');
//     Route::put('/news/{news}',            [AdminNewsController::class, 'update'])->name('news.update');
//     Route::delete('/news/{news}',         [AdminNewsController::class, 'destroy'])->name('news.destroy');
//     Route::patch('/news/{news}/toggle',   [AdminNewsController::class, 'togglePublish'])->name('news.toggle');

// });
// ----------------------------------------------------------------
// ADMIN ROUTES — Protected by auth middleware
// ----------------------------------------------------------------
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', fn() => view('admin.dashboard'))->name('dashboard');

    // News CRUD
    Route::get('/news',                    [AdminNewsController::class, 'index'])->name('news.index');
    Route::get('/news/create',             [AdminNewsController::class, 'create'])->name('news.create');
    Route::post('/news',                   [AdminNewsController::class, 'store'])->name('news.store');
    Route::post('/news/upload-image',      [AdminNewsController::class, 'uploadImage'])->name('news.upload-image');
    Route::get('/news/{news}/edit',        [AdminNewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}',             [AdminNewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}',          [AdminNewsController::class, 'destroy'])->name('news.destroy');
    Route::patch('/news/{news}/toggle',    [AdminNewsController::class, 'togglePublish'])->name('news.toggle');

    // Staff CRUD
    Route::get('/staff',                   [AdminStaffController::class, 'index'])->name('staff.index');
    Route::get('/staff/create',            [AdminStaffController::class, 'create'])->name('staff.create');
    Route::post('/staff',                  [AdminStaffController::class, 'store'])->name('staff.store');
    Route::get('/staff/{staff}/edit',      [AdminStaffController::class, 'edit'])->name('staff.edit');
    Route::put('/staff/{staff}',           [AdminStaffController::class, 'update'])->name('staff.update');
    Route::delete('/staff/{staff}',        [AdminStaffController::class, 'destroy'])->name('staff.destroy');


    // Lecturer CRUD
    Route::get('/lecturers',                  [AdminLecturerController::class, 'index'])->name('lecturers.index');
    Route::get('/lecturers/create',           [AdminLecturerController::class, 'create'])->name('lecturers.create');
    Route::get('/lecturers/template',         [AdminLecturerController::class, 'downloadTemplate'])->name('lecturers.template');
    Route::post('/lecturers/import',          [AdminLecturerController::class, 'import'])->name('lecturers.import');
    Route::post('/lecturers/bulk-delete',      [AdminLecturerController::class, 'bulkDestroy'])->name('lecturers.bulk-delete');
    Route::post('/lecturers',                 [AdminLecturerController::class, 'store'])->name('lecturers.store');
    Route::get('/lecturers/{lecturer}/edit',  [AdminLecturerController::class, 'edit'])->name('lecturers.edit');
    Route::put('/lecturers/{lecturer}',       [AdminLecturerController::class, 'update'])->name('lecturers.update');
    Route::delete('/lecturers/{lecturer}',    [AdminLecturerController::class, 'destroy'])->name('lecturers.destroy');

    // Department News CRUD
    Route::get('/department-news',                     [AdminDepartmentNewsController::class, 'index'])->name('department-news.index');
    Route::get('/department-news/create',              [AdminDepartmentNewsController::class, 'create'])->name('department-news.create');
    Route::post('/department-news',                    [AdminDepartmentNewsController::class, 'store'])->name('department-news.store');
    Route::get('/department-news/{departmentNews}/edit', [AdminDepartmentNewsController::class, 'edit'])->name('department-news.edit');
    Route::put('/department-news/{departmentNews}',     [AdminDepartmentNewsController::class, 'update'])->name('department-news.update');
    Route::delete('/department-news/{departmentNews}',  [AdminDepartmentNewsController::class, 'destroy'])->name('department-news.destroy');

    // Featured Links CRUD
    Route::get('/featured-links',                          [AdminFeaturedLinkController::class, 'index'])->name('featured-links.index');
    Route::get('/featured-links/create',                   [AdminFeaturedLinkController::class, 'create'])->name('featured-links.create');
    Route::post('/featured-links',                         [AdminFeaturedLinkController::class, 'store'])->name('featured-links.store');
    Route::get('/featured-links/{featuredLink}/edit',      [AdminFeaturedLinkController::class, 'edit'])->name('featured-links.edit');
    Route::put('/featured-links/{featuredLink}',           [AdminFeaturedLinkController::class, 'update'])->name('featured-links.update');
    Route::delete('/featured-links/{featuredLink}',        [AdminFeaturedLinkController::class, 'destroy'])->name('featured-links.destroy');
    Route::get('/featured-links/template',                 [AdminFeaturedLinkController::class, 'downloadTemplate'])->name('featured-links.template');
    Route::post('/featured-links/import',                  [AdminFeaturedLinkController::class, 'import'])->name('featured-links.import');
    Route::post('/featured-links/bulk-delete',             [AdminFeaturedLinkController::class, 'bulkDelete'])->name('featured-links.bulk-delete');
    Route::get('/featured-links/content-template',         [AdminFeaturedLinkController::class, 'downloadContentTemplate'])->name('featured-links.content-template');
    Route::post('/featured-links/import-content',          [AdminFeaturedLinkController::class, 'importContent'])->name('featured-links.import-content');

    // Centres CRUD
    Route::get('/centres',                          [AdminCentreController::class, 'index'])->name('centres.index');
    Route::get('/centres/create',                   [AdminCentreController::class, 'create'])->name('centres.create');
    Route::post('/centres',                         [AdminCentreController::class, 'store'])->name('centres.store');
    Route::get('/centres/{centre}/edit',            [AdminCentreController::class, 'edit'])->name('centres.edit');
    Route::put('/centres/{centre}',                 [AdminCentreController::class, 'update'])->name('centres.update');
    Route::delete('/centres/{centre}',              [AdminCentreController::class, 'destroy'])->name('centres.destroy');
    Route::get('/centres/template',                 [AdminCentreController::class, 'downloadTemplate'])->name('centres.template');
    Route::post('/centres/import',                  [AdminCentreController::class, 'import'])->name('centres.import');
    Route::post('/centres/bulk-delete',             [AdminCentreController::class, 'bulkDelete'])->name('centres.bulk-delete');

    // Units CRUD
    Route::get('/units',                          [AdminUnitController::class, 'index'])->name('units.index');
    Route::get('/units/create',                   [AdminUnitController::class, 'create'])->name('units.create');
    Route::post('/units',                         [AdminUnitController::class, 'store'])->name('units.store');
    Route::get('/units/{unit}/edit',              [AdminUnitController::class, 'edit'])->name('units.edit');
    Route::put('/units/{unit}',                   [AdminUnitController::class, 'update'])->name('units.update');
    Route::delete('/units/{unit}',                [AdminUnitController::class, 'destroy'])->name('units.destroy');
    Route::get('/units/template',                 [AdminUnitController::class, 'downloadTemplate'])->name('units.template');
    Route::post('/units/import',                  [AdminUnitController::class, 'import'])->name('units.import');
    Route::post('/units/bulk-delete',             [AdminUnitController::class, 'bulkDelete'])->name('units.bulk-delete');

    // Colleges CRUD
    Route::get('/colleges',                     [AdminCollegeController::class, 'index'])->name('colleges.index');
    Route::get('/colleges/create',              [AdminCollegeController::class, 'create'])->name('colleges.create');
    Route::post('/colleges',                    [AdminCollegeController::class, 'store'])->name('colleges.store');
    Route::get('/colleges/{college}/edit',      [AdminCollegeController::class, 'edit'])->name('colleges.edit');
    Route::put('/colleges/{college}',           [AdminCollegeController::class, 'update'])->name('colleges.update');
    Route::delete('/colleges/{college}',        [AdminCollegeController::class, 'destroy'])->name('colleges.destroy');

    // Departments CRUD
    Route::get('/departments',                      [AdminDepartmentController::class, 'index'])->name('departments.index');
    Route::get('/departments/create',               [AdminDepartmentController::class, 'create'])->name('departments.create');
    Route::post('/departments',                     [AdminDepartmentController::class, 'store'])->name('departments.store');
    Route::get('/departments/{department}/edit',    [AdminDepartmentController::class, 'edit'])->name('departments.edit');
    Route::put('/departments/{department}',         [AdminDepartmentController::class, 'update'])->name('departments.update');
    Route::delete('/departments/{department}',      [AdminDepartmentController::class, 'destroy'])->name('departments.destroy');
    Route::get('/departments/template',             [AdminDepartmentController::class, 'downloadTemplate'])->name('departments.template');
    Route::post('/departments/import',              [AdminDepartmentController::class, 'import'])->name('departments.import');

    // Navigation CRUD
    Route::get('/navigation',                         [AdminNavigationController::class, 'index'])->name('navigation.index');
    Route::get('/navigation/create',                  [AdminNavigationController::class, 'create'])->name('navigation.create');
    Route::post('/navigation',                        [AdminNavigationController::class, 'store'])->name('navigation.store');
    Route::get('/navigation/{navigationItem}/edit',   [AdminNavigationController::class, 'edit'])->name('navigation.edit');
    Route::put('/navigation/{navigationItem}',        [AdminNavigationController::class, 'update'])->name('navigation.update');
    Route::delete('/navigation/{navigationItem}',     [AdminNavigationController::class, 'destroy'])->name('navigation.destroy');

    // Audit Log
    Route::get('/audit',                              [AdminAuditController::class, 'index'])->name('audit.index');

    // Pages CRUD
    Route::get('/pages',                              [AdminPageController::class, 'index'])->name('pages.index');
    Route::get('/pages/create',                       [AdminPageController::class, 'create'])->name('pages.create');
    Route::post('/pages',                             [AdminPageController::class, 'store'])->name('pages.store');
    Route::get('/pages/{page}/edit',                  [AdminPageController::class, 'edit'])->name('pages.edit');
    Route::put('/pages/{page}',                       [AdminPageController::class, 'update'])->name('pages.update');
    Route::delete('/pages/{page}',                    [AdminPageController::class, 'destroy'])->name('pages.destroy');
    Route::post('/pages/upload-block-image',          [AdminPageController::class, 'uploadBlockImage'])->name('pages.upload-block-image');

    // Course Synopsis CRUD
    Route::get('/course-synopsis',                          [AdminCourseSynopsisController::class, 'index'])->name('course-synopsis.index');
    Route::get('/course-synopsis/create',                   [AdminCourseSynopsisController::class, 'create'])->name('course-synopsis.create');
    Route::post('/course-synopsis',                         [AdminCourseSynopsisController::class, 'store'])->name('course-synopsis.store');
    Route::get('/course-synopsis/{courseSynopsis}/edit',    [AdminCourseSynopsisController::class, 'edit'])->name('course-synopsis.edit');
    Route::put('/course-synopsis/{courseSynopsis}',         [AdminCourseSynopsisController::class, 'update'])->name('course-synopsis.update');
    Route::delete('/course-synopsis/{courseSynopsis}',      [AdminCourseSynopsisController::class, 'destroy'])->name('course-synopsis.destroy');
    Route::get('/course-synopsis/template',                 [AdminCourseSynopsisController::class, 'downloadTemplate'])->name('course-synopsis.template');
    Route::post('/course-synopsis/import',                  [AdminCourseSynopsisController::class, 'import'])->name('course-synopsis.import');
    Route::post('/course-synopsis/bulk-delete',             [AdminCourseSynopsisController::class, 'bulkDelete'])->name('course-synopsis.bulk-delete');

});

require __DIR__.'/auth.php';