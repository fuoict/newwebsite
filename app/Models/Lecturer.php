<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'name', 'position', 'specialization',
        'college_id', 'department_id',
        'email', 'phone',
        'biography', 'qualifications', 'research_interest',
        'google_scholar', 'researchgate', 'linkedin', 'twitter',
        'personal_website', 'orcid', 'academia_edu', 'linktree',
        'scopus', 'wos', 'publons', 'ad_scientific',
        'photo', 'is_hod', 'is_published', 'sort_order',
    ];

    protected $casts = [
        'is_hod'       => 'boolean',
        'is_published' => 'boolean',
    ];

    // ── Relationships ──────────────────────────────
    public function college()
    {
        return $this->belongsTo(College::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // ── Accessors ──────────────────────────────────
    public function getFullNameAttribute(): string
    {
        return trim(($this->title ? $this->title . ' ' : '') . $this->name);
    }

    public function getPhotoUrlAttribute(): string
    {
        if ($this->photo) {
            return asset('storage/' . $this->photo);
        }
        // Auto-generated avatar as fallback
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name)
            . '&background=0f3460&color=ffffff&size=300&bold=true';
    }

    // ── Scopes ─────────────────────────────────────
    public function scopePublished($q)
    {
        return $q->where('is_published', true);
    }

    public function scopeOrdered($q)
    {
        // HOD always appears first, then by sort_order, then alphabetically
        return $q->orderByRaw('is_hod DESC')->orderBy('sort_order')->orderBy('name');
    }

    // ── Helpers ────────────────────────────────────
    public function hasAnyLink(): bool
    {
        return $this->google_scholar || $this->researchgate || $this->linkedin
            || $this->twitter || $this->personal_website || $this->orcid
            || $this->academia_edu || $this->linktree || $this->scopus
            || $this->wos || $this->publons || $this->ad_scientific;
    }

    public static function positions(): array
    {
        return [
            'Professor',
            'Associate Professor',
            'Reader',
            'Senior Lecturer',
            'Lecturer I',
            'Lecturer II',
            'Assistant Lecturer',
            'Graduate Assistant',
            'Head of Department (HOD)',
            'Dean',
            'Director',
            'Administrative Staff',
            'Technical Staff',
        ];
    }
}
