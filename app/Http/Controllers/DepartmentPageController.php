<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\DepartmentNews;
use App\Models\News;
use App\Models\DepartmentFeaturedLink;
use App\Models\CourseSynopsis;
use Illuminate\Http\Request;

class DepartmentPageController extends Controller
{
    /**
     * Featured link content page.
     */
    public function page(string $deptSlug, string $linkSlug)
    {
        $department = Department::where('slug', $deptSlug)->where('is_active', true)->firstOrFail();

        // Find the link by matching the URL pattern
        $link = DepartmentFeaturedLink::where('department_id', $department->id)
            ->where('url', "/departments/{$deptSlug}/page/{$linkSlug}")
            ->firstOrFail();

        // Get other featured links for sidebar
        $featuredLinks = DepartmentFeaturedLink::where('department_id', $department->id)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // If this is the Staff List page, pull lecturers from the database
        $lecturers = null;
        if (strtolower($link->title) === 'staff list') {
            $lecturers = \App\Models\Lecturer::published()
                ->where('department_id', $department->id)
                ->ordered()
                ->get();
        }

        return view('pages.divisions.colleges.dept-page', compact('department', 'link', 'featuredLinks', 'lecturers'));
    }

    /**
     * Department news listing page.
     */
    public function news(Request $request, string $slug)
    {
        $department = Department::where('slug', $slug)->where('is_active', true)->firstOrFail();

        // Department-specific news
        $deptNews = DepartmentNews::published()
            ->where('department_id', $department->id)
            ->get();

        // Main news tagged to this department
        $taggedNews = News::published()
            ->whereJsonContains('departments', $department->department_name)
            ->get();

        // Merge, sort by date, and paginate
        $newsList = $deptNews->concat($taggedNews)
            ->sortByDesc('published_at')
            ->values();

        $newsList = new \Illuminate\Pagination\LengthAwarePaginator(
            $newsList->forPage(request()->get('page', 1), 9),
            $newsList->count(),
            9,
            request()->get('page', 1),
            ['path' => request()->url()]
        );

        return view('pages.divisions.colleges.dept-news', compact('department', 'newsList'));
    }

    /**
     * Single department news detail page.
     */
    public function newsShow(string $deptSlug, string $newsSlug)
    {
        $department = Department::where('slug', $deptSlug)->where('is_active', true)->firstOrFail();
        // Find news in either table
        $news = DepartmentNews::published()
            ->where('department_id', $department->id)
            ->where('slug', $newsSlug)
            ->first();

        if (!$news) {
            $news = News::published()
                ->where('slug', $newsSlug)
                ->whereJsonContains('departments', $department->department_name)
                ->firstOrFail();
        }

        $relatedDept = DepartmentNews::published()
            ->where('department_id', $department->id)
            ->where('id', '!=', $news->id)
            ->get();
        $relatedTagged = News::published()
            ->where('id', '!=', $news->id)
            ->whereJsonContains('departments', $department->department_name)
            ->get();
        $related = $relatedDept->concat($relatedTagged)
            ->sortByDesc('published_at')
            ->take(3)
            ->values();

        return view('pages.divisions.colleges.dept-news-show', compact('department', 'news', 'related'));
    }

    /**
     * Course synopsis listing page.
     */
    public function courses(Request $request, string $slug)
    {
        $department = Department::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $query = CourseSynopsis::published()
            ->where('department_id', $department->id)
            ->orderBy('level')
            ->orderBy('course_code');

        if ($request->filled('level')) {
            $query->where('level', $request->level);
        }

        $courses = $query->get();
        $levels = CourseSynopsis::published()
            ->where('department_id', $department->id)
            ->distinct()
            ->pluck('level')
            ->sort()
            ->values();

        return view('pages.divisions.colleges.dept-courses', compact('department', 'courses', 'levels'));
    }
}
