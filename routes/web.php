<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {return view('about'); });
// Route::get('/about-board-of-trustee', [PagesControll]);

Route::get('about-board-of-trustee', [PagesController::class, 'aboutBoardOfTrustee']);
Route::get('profile-board-of-trustee', [PagesController::class, 'profileBOT']);
Route::get('director-of-council', [PagesController::class, 'dirOfCouncil']);
Route::get('member-of-council', [PagesController::class, 'memberOfCouncil']);
Route::get('decision-extract', [PagesController::class, 'decisionExtract']);
Route::get('commmittee-of-council', [PagesController::class, 'commiteeOfCouncil']);
Route::get('schedule-of-meetings', [PagesController::class, 'scheduleOfMeetings']);
Route::get('the-senate', [PagesController::class, 'theSenate']);
Route::get('congregation', [PagesController::class, 'congregation']);
Route::get('the-vice-chancellor', [PagesController::class, 'theViceChancellor']);
Route::get('the-registrar', [PagesController::class, 'theRegistrar']);
Route::get('the-bursar', [PagesController::class, 'theBursar']);
Route::get('the-librarian', [PagesController::class, 'theLibrarian']);
Route::get('our-campus', [PagesController::class, 'ourCampus']);
Route::get('our-gallery', [PagesController::class, 'ourGallery']);
Route::get('staff-downloads', [PagesController::class, 'staffDownloads']);
Route::get('resources', [PagesController::class, 'resources']);
Route::get('sub-degree-programme', [PagesController::class, 'subDegrees']);
Route::get('undergradute-programme', [PagesController::class, 'underGraduate']);
Route::get('postgraduate-programme', [PagesController::class, 'postGraduate']);
Route::get('the-dean-of-postgraduate-schools', [PagesController::class, 'spgsDean']);
Route::get('our-staff', [PagesController::class, 'ourStaff']);
Route::get('admission-requirement', [PagesController::class, 'admissionRequirement']);
Route::get('school-of-postgraduare-applications', [PagesController::class, 'spgsApplications']);

