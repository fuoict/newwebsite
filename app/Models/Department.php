<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'department_name',
        'department_code',
        'slug',
        'college_id',
        'hod_name',
        'hod_email',
        'hod_phone',
        'hod_image',
        'department_image',
        'department_title',
        'department_description',
        'about_department',
        'mission',
        'vision',
        'our-staffs',
        'is_active'
    ];

    public function college(){
        return $this->belongsTo(College::class, 'college_id');
    }

    // ── New Relationships ─────────────────────────
    public function featuredLinks()
    {
        return $this->hasMany(DepartmentFeaturedLink::class)->orderBy('sort_order');
    }

    public function departmentNews()
    {
        return $this->hasMany(DepartmentNews::class)->latest('published_at');
    }

    public function courseSynopses()
    {
        return $this->hasMany(CourseSynopsis::class)->orderBy('level')->orderBy('course_code');
    }

    public function lecturers()
    {
        return $this->hasMany(Lecturer::class);
    }

    /**
     * Get the max level for this department based on college/programme type.
     * Law, Nursing, MLS, Environmental Science → 500L
     * Physiotherapy → 600L
     * Others → 400L
     */
    public function getMaxLevelAttribute(): int
    {
        $name = strtolower($this->department_name);

        if (str_contains($name, 'physiotherapy')) {
            return 600;
        }

        $fiveHundredLevels = ['law', 'nursing', 'medical laboratory', 'mls', 'environmental'];
        foreach ($fiveHundredLevels as $keyword) {
            if (str_contains($name, $keyword)) {
                return 500;
            }
        }

        return 400;
    }

    /**
     * Determine if this department should show "Laboratory" or "Gallery" in featured links.
     * Science/Medical → Laboratory, Arts → Gallery
     */
    public function getLabLabelAttribute(): string
    {
        $name = strtolower($this->department_name);
        $artsKeywords = ['arts', 'arabic', 'islamic', 'humanities', 'language', 'social'];
        foreach ($artsKeywords as $keyword) {
            if (str_contains($name, $keyword)) {
                return 'Gallery';
            }
        }
        return 'Laboratory Facilities';
    }
}
