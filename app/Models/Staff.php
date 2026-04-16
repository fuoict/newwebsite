<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    protected $fillable = [
        'title', 'name', 'position', 'email', 'phone',
        'photo', 'bio', 'qualifications', 'specialization',
        'college_id', 'department_id',
        'sort_order', 'is_hod', 'is_published',
    ];

    protected $casts = [
        'is_hod'       => 'boolean',
        'is_published' => 'boolean',
    ];

    // Relationship to College
    public function college()
    {
        return $this->belongsTo(College::class);
    }

    // Full name with title
    public function getFullNameAttribute(): string
    {
        return trim($this->title . ' ' . $this->name);
    }

    // Photo URL helper
    public function getPhotoUrlAttribute(): string
    {
        if ($this->photo) {
            return asset('storage/' . $this->photo);
        }
        return asset('img/all-img/default-staff.jpg');
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    // Position options for dropdown
    public static function positions(): array
    {
        return [
            'Professor', 'Associate Professor', 'Senior Lecturer',
            'Lecturer I', 'Lecturer II', 'Assistant Lecturer',
            'Graduate Assistant', 'HOD', 'Dean', 'Director',
            'Administrative Staff', 'Technical Staff',
        ];
    }
}
