<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\VcSpeech;
use App\Models\Department;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function about()
    {
        return view('pages.about');
    }

    public function appraisal()
    {
        return view('pages.theuniversity.appraisal');
    }

    public function speeches()
    {
        $Data = [
            'Speachs' => VcSpeech::all()
        ];
        
        return view('pages.theuniversity.office-of-the-vice-chancellor', $Data);
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
        $Data = [
            'Records' => VcSpeech::all()
        ];
        // dd($Speachs);
        return view('pages.theuniversity.office-of-the-vice-chancellor', $Data);
    }

    public function theDVC()
    {
        return view('pages.theuniversity.office-of-the-dvc');
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

    public function studentDownloads()
    {
        return view('pages.theuniversity.students-download');
    }

    public function generalDownloads()
    {
        return view('pages.theuniversity.general-download');
    }

    public function theUniversityLibrary()
    {
        return view('pages.theuniversity.the-university-library');
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
    public function postgraduateStudentDownload()
    {
        return view('pages.academics.pg-download');
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

    $lecturers = \App\Models\Lecturer::published()
        ->where('department_id', $id)
        ->ordered()
        ->get();

    return view('pages.divisions.colleges.departments', compact('Department', 'lecturers'));
}

    // public function departments(Request $request)
    // {
    //     $id = $request->route('id');
    //     $Department = Department::whereId($id)->where('is_active', true)->first();
    //     return view('pages.divisions.colleges.departments', compact('Department'));
    // }

    
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
        $lectures = \App\Models\InauguralLecture::orderBy('lecture_date', 'desc')->paginate(4);
        return view('pages.publications.inaugural-lectures', ['lectures' => $lectures]);
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

    private function loadShowcaseData(string $fileName)
    {
        $path = base_path("data/{$fileName}");
        if (!file_exists($path)) {
            return [];
        }

        return json_decode(file_get_contents($path), true) ?: [];
    }

    private function renderShowcasePage(string $title, string $intro, string $dataFile)
    {
        $items = $this->loadShowcaseData($dataFile);
        $filterCategories = collect($items)
            ->pluck('category')
            ->filter()
            ->unique()
            ->values()
            ->all();

        return view('pages.showcase', [
            'pageTitle' => $title,
            'pageIntro' => $intro,
            'items' => $items,
            'filterCategories' => $filterCategories,
        ]);
    }

    public function partnerships()
    {
        return $this->renderShowcasePage(
            'Partnerships & Collaborations',
            'Fountain University’s growth has been shaped by a network of institutional, corporate, and governmental partners who share our commitment to academic excellence, research, and community impact. From international university consortia to specialized technology and healthcare institutions, these collaborations expand opportunities for our students, faculty, and researchers.',
            'partners.json'
        );
    }

    public function donors()
    {
        return $this->renderShowcasePage(
            'Donors',
            'The generosity of individuals, corporate bodies, and foundations has been instrumental in building Fountain University’s infrastructure, endowing scholarships, and funding research. This page honours those whose contributions continue to shape opportunities for our students.',
            'donors.json'
        );
    }

    public function scholarships()
    {
        return $this->renderShowcasePage(
            'Scholarships',
            'Fountain University is committed to ensuring that financial need is never a barrier to academic excellence. Our scholarship programmes — funded by the university, partner organizations, and individual donors — support outstanding and deserving students across all faculties.',
            'scholarships.json'
        );
    }

    public function dignitaries()
    {
        return $this->renderShowcasePage(
            'Distinguished Visitors & Dignitaries',
            'Over the years, Fountain University has welcomed heads of state, traditional rulers, religious leaders, diplomats, and eminent scholars to its campus in Osogbo. These visits reflect the university’s growing standing as a centre of learning, dialogue, and national engagement.',
            'dignitaries.json'
        );
    }

    public function honoraryDoctorates()
    {
        return $this->renderShowcasePage(
            'Honorary Doctorate Awardees',
            'Since its inception, Fountain University has conferred honorary doctorate degrees on distinguished individuals whose leadership, scholarship, and public service exemplify the values the university seeks to instill in its graduates. This list honours those recipients from 2012 to the present.',
            'honoraryDoctorates.json'
        );
    }

    public function convocationLecturers()
    {
        return $this->renderShowcasePage(
            'Convocation Lecturers',
            'Each convocation ceremony at Fountain University features a keynote lecture delivered by a distinguished thinker, technocrat, or public figure, offering graduating students insight and inspiration as they step into the next phase of their lives. This page chronicles convocation lecturers from the university’s first ceremony in 2011 to the present.',
            'convocationLecturers.json'
        );
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
