<?php

use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Models\News;



Route::get('/', function () {
    // return view('welcome');
    $featuredNews    = News::published()->featured()->latest()->limit(2)->get();
    $sidebarFeatured = News::published()->featured()->latest()->skip(2)->first();
    $sidebarSmall    = News::published()->latest()
                            ->whereNotIn('id',
                                $featuredNews->pluck('id')
                                ->push(optional($sidebarFeatured)->id)
                                ->filter()->toArray()
                            )->limit(3)->get();
    return view('welcome', compact('featuredNews', 'sidebarFeatured', 'sidebarSmall'));
});


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
Route::get('/colleges/{id}', [PagesController::class, 'colleges'])->name('colleges.show');
Route::get('/departments/{id}', [PagesController::class, 'departments'])->name('department');
Route::get('/scentres', [PagesController::class, 'units'])->name('scentres');
Route::get('/inaugural-lectures', [PagesController::class, 'inauguralLectures'])->name('inaugural-lectures');
Route::get('/annual-report', [PagesController::class, 'annualReport'])->name('annual-report');
Route::get('/fuo-chronicles', [PagesController::class, 'fuoChronicles'])->name('fuo-chronicles');

Route::get('/academic-planning-unit', [PagesController::class, 'academicPlanningUnit'])->name('academicplanning');
Route::get('/bursary-unit', [PagesController::class, 'bursaryUnit'])->name('bursary');
Route::get('/counselling-unit', [PagesController::class, 'counsellingUnit'])->name('counselling');
Route::get('/ict-unit', [PagesController::class, 'ictUnit'])->name('ictunit');
Route::get('/internal-audit-unit', [PagesController::class, 'internalAuditUnit'])->name('auditunit');
Route::get('/public-relation-unit', [PagesController::class, 'publicRelationUnit'])->name('prounit');
Route::get('/quality-assurance-unit', [PagesController::class, 'qualityAssuranceUnit'])->name('qassurance');
Route::get('/registry-unit', [PagesController::class, 'registryUnit'])->name('registry');
Route::get('/siwes-unit', [PagesController::class, 'siwesUnit'])->name('siwes');
Route::get('/sport-unit', [PagesController::class, 'sportUnit'])->name('sports');
Route::get('/student-affairs-unit', [PagesController::class, 'studentAffairsUnit'])->name('student-affairs');


Route::get('/consultancy', [PagesController::class, 'consultancy'])->name('consultancy');
Route::get('/fucrit', [PagesController::class, 'fucrit'])->name('fucrit');
Route::get('/spiritual-growth', [PagesController::class, 'spiritualGrowth'])->name('spiritual-growth');
Route::get('/linkages', [PagesController::class, 'linkages'])->name('linkages');
Route::get('/arabic-islamic-research', [PagesController::class, 'arabicIslamicResearch'])->name('arabic-islamic-research');
Route::get('/sandwich', [PagesController::class, 'sandwich'])->name('sandwich');
Route::get('/subdegree', [PagesController::class, 'subdegree'])->name('subdegree');
Route::get('/entrepreneurship', [PagesController::class, 'entrepreneurship'])->name('entrepreneurship');



Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/dashboard', function () {
        return view('dashboard');
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

});

require __DIR__.'/auth.php';