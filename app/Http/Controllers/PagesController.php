<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Department;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function about()
    {
        return view('pages.about');
    }

    // ABOUT THE UNIVERSITY ......................
    public function aboutBoardOfTrustee()
    {
        return view('pages.theuniversity.about-board-of-trustee');
    }

    public function profileBOT()
    {
        return view('pages.theuniversity.profile-member-bot');
    }

    public function aboutGoverningCouncil()
    {
        return view('pages.theuniversity.about-governing-council');
    }

    public function dirOfCouncil()
    {
        return view('pages.theuniversity.director-of-council');
    }

    public function memberOfCouncil()
    {
        return view('pages.theuniversity.profile-member-bot');
    }

    public function decisionExtract()
    {
        return view('pages.theuniversity.decision-extract');
    }

    public function commiteeOfCouncil()
    {
        return view('pages.theuniversity.committee-of-council');
    }

    public function scheduleOfMeetings()
    {
        return view('pages.theuniversity.schedule-of-meeting');
    }

    public function theSenate()
    {
        return view('pages.theuniversity.the-senate');
    }

    public function congregation()
    {
        return view('pages.theuniversity.congregation');
    }

    public function theViceChancellor()
    {
        return view('pages.theuniversity.office-of-the-vice-chancellor');
    }

    public function theRegistrar()
    {
        return view('pages.theuniversity.office-of-the-registrar');
    }

    public function theBursar()
    {
        return view('pages.theuniversity.office-of-the-bursar');
    }

    public function theLibrarian()
    {
        return view('pages.theuniversity.office-of-the-librarian');
    }

    public function ourCampus()
    {
        return view('pages.theuniversity.our-campus');
    }

    public function ourGallery()
    {
        return view('pages.theuniversity.our-gallery');
    }

    public function staffDownloads()
    {
        return view('pages.theuniversity.staff-downloads');
    }

    public function resources()
    {
        return view('pages.theuniversity.resources');
    }

    // UNIVERSITY ACADEMICS ..........................
    public function subDegrees()
    {
        return view('pages.academics.subdegrees-programme');
    }

    public function underGraduate()
    {
        return view('pages.academics.undergradute-programme');
    }

    public function postGraduate()
    {
        return view('pages.academics.postgraduate-programme');
    }

    public function spgsDean()
    {
        return view('pages.academics.spgs-dean');
    }

    public function ourStaff()
    {
        return view('pages.academics.our-staff');
    }


    // ADMISSION ......................................
    public function admissionRequirement()
    {
        return view('pages.admissions.admission-requirement');
    }

    public function spgsApplications()
    {
        return view('pages.admissions.spgs-application');
    }

    public function underGraduateApplications()
    {
        return view('pages.admissions.undergraduate-applications');
    }

    public function sandWichApplications()
    {
        return view('pages.admissions.sandwich-application');
    }


    // UNIVERSITY DIVISIONS .......................................
    public function colleges(Request $request)
    {
        // If you want to pass data to the view, you can do it like this:
        // $colleges = College::all(); // Assuming you have a College model
        // return view('pages.divisions.colleges.colleges', compact('colleges'));
        // If you want to show a specific college, you can use route model binding or pass an ID
        // return view('pages.divisions.colleges.colleges', ['college' =>
        $id = $request->route('id');
        $Data = [
            'Departments' => Department::where('is_active', true)->where('college_id', $id)->first(),
            'Colleges' => College::whereId($id)->first()
        ];
        
        return view('pages.divisions.colleges.colleges', $Data);
    }

    
    public function centres()
    {
        return view('pages.divisions.centres');
    }

    public function units()
    {
        return view('pages.divisions.units');
    }

    // UNIVERSITY PUBLICATIONS ................................

    public function inauguralLectures()
    {
        return view('pages.publications.inaugural-lectures');
    }

    public function annualReport()
    {
        return view('pages.publications.annual-reports');
    }

    public function fuoChronicles()
    {
        return view('pages.publications.fountain-chronicles');
    }

    // SPECIAL PAGES ........................................
    public function contact()
    {
        return view('pages.contact');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function alumni()
    {
        return view('pages.alumni');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function applyForAdmission()
    {
        return view('pages.apply-for-admission');
    }

}
