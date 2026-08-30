<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\Auditable;

class Centre extends Model
{
    use Auditable;
    protected $fillable = [
        'name', 'slug', 'short_name', 'lecturer_id', 'director_name', 'director_title',
        'director_image', 'email', 'phone', 'intro', 'description',
        'mission', 'vision', 'objectives', 'image',
        'sort_order', 'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($centre) {
            if (empty($centre->slug)) {
                $slug = Str::slug($centre->name);
                $base = $slug;
                $count = 1;
                while (static::where('slug', $slug)->exists()) {
                    $slug = $base . '-' . $count;
                    $count++;
                }
                $centre->slug = $slug;
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    /**
     * Get the director's photo — prefer uploaded image, then linked lecturer's photo
     */
    public function getDirectorPhotoUrlAttribute(): ?string
    {
        if ($this->director_image) {
            return asset('storage/' . $this->director_image);
        }
        if ($this->lecturer && $this->lecturer->photo) {
            return asset('storage/' . $this->lecturer->photo);
        }
        // Auto-generated avatar as fallback
        $name = $this->director_name ?? $this->name;
        return 'https://ui-avatars.com/api/?name=' . urlencode($name)
            . '&background=035F39&color=ffffff&size=300&bold=true';
    }

    /**
     * Get the director's name — prefer linked lecturer, then stored name
     */
    public function getDirectorDisplayNameAttribute(): ?string
    {
        if ($this->lecturer) {
            return $this->lecturer->full_name;
        }
        return $this->director_name;
    }

    /**
     * Get the director's title/position
     */
    public function getDirectorDisplayTitleAttribute(): ?string
    {
        if ($this->lecturer) {
            return $this->lecturer->position ?? $this->director_title;
        }
        return $this->director_title;
    }

    /**
     * Get the director's email — prefer linked lecturer, then stored email
     */
    public function getDirectorDisplayEmailAttribute(): ?string
    {
        if ($this->lecturer && $this->lecturer->email) {
            return $this->lecturer->email;
        }
        return $this->email;
    }

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
