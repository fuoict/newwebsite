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
            'Departments' => Department::where('is_active', 1)->where('college_id', $id)->get(),
            'Colleges' => College::whereId($id)->first()
        ];
        
        return view('pages.divisions.colleges.colleges', $Data);
    }

    public function departments(Request $request)
    {
        $id = $request->route('id');
        $Department = Department::whereId($id)->where('is_active', true)->first();
        return view('pages.divisions.colleges.departments', compact('Department'));
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

    // UNIT METHODS .....................................................

    public function academicPlanningUnit()
    {
        return view('pages.divisions.units.academic-planning-unit');
    }

    public function bursaryUnit()
    {
        return view('pages.divisions.units.bursary-unit');
    }

    public function counsellingUnit()
    {
        return view('pages.divisions.units.counselling-unit');
    }

    public function ictUnit()
    {
        return view('pages.divisions.units.ict-unit');
    }

    public function internalAuditUnit()
    {
        return view('pages.divisions.units.internal-audit-unit');
    }

    public function publicRelationUnit()
    {
        return view('pages.divisions.units.public-relation-unit');
    }

    public function qualityAssuranceUnit()
    {   
        return view('pages.divisions.units.quality-assurance-unit');
    }

    public function registryUnit()
    {
        return view('pages.divisions.units.registry-unit');
    }

    public function siwesUnit()
    {
        return view('pages.divisions.units.siwes-unit');
    }

    public function sportUnit()
    {
        return view('pages.divisions.units.sport-unit');
    }

    public function studentAffairsUnit()
    {
        return view('pages.divisions.units.student-affairs-unit');
    }

    // CENTRES PAGES .....................................................
    public function consultancy()
    {
        return view('pages.divisions.centres.consultancy');
    }
    public function fucrit()
    {
        return view('pages.divisions.centres.fucrit');
    }
    public function spiritualGrowth()
    {
        return view('pages.divisions.centres.spiritual-growth');
    }
    public function linkages()
    {
        return view('pages.divisions.centres.linkages');
    }
    public function arabicIslamicResearch()
    {
        return view('pages.divisions.centres.arabic-islamic-research');
    }
    public function sandwich()
    {
        return view('pages.divisions.centres.sandwich');
    }
    public function subdegree()
    {
        return view('pages.divisions.centres.sub-degree');
    }
    public function entrepreneurship()
    {
        return view('pages.divisions.centres.entrepreneurship');
    }




}
