<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', [PagesController::class, 'about'])->name('about');
// Route::get('/about-board-of-trustee', [PagesControll]);

Route::get('/alumni', [PagesController::class, 'alumni'])->name('alumni');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

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
Route::get('/the-registrar', [PagesController::class, 'theRegistrar'])->name('the-registrar');
Route::get('/the-bursar', [PagesController::class, 'theBursar'])->name('the-bursar');
Route::get('/the-librarian', [PagesController::class, 'theLibrarian'])->name('the-librarian');
Route::get('/our-campus', [PagesController::class, 'ourCampus'])->name('our-campus');
Route::get('/our-gallery', [PagesController::class, 'ourGallery'])->name('our-gallery');
Route::get('/staff-downloads', [PagesController::class, 'staffDownloads'])->name('staff-downloads');
Route::get('/resources', [PagesController::class, 'resources'])->name('resources');
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
Route::get('/departments', [PagesController::class, 'departments'])->name('departments');
Route::get('/scentres', [PagesController::class, 'units'])->name('scentres');
Route::get('/inaugural-lectures', [PagesController::class, 'inauguralLectures'])->name('inaugural-lectures');
Route::get('/annual-report', [PagesController::class, 'annualReport'])->name('annual-report');
Route::get('/fuo-chronicles', [PagesController::class, 'fuoChronicles'])->name('fuo-chronicles');

