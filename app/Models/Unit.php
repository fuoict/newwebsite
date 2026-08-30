<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\Auditable;

class Unit extends Model
{
    use Auditable;
    protected $fillable = [
        'name', 'slug', 'short_name', 'lecturer_id', 'director_name', 'director_title',
        'director_image', 'email', 'phone', 'intro', 'description', 'mission', 'vision', 'objectives',
        'image', 'sort_order', 'is_active',
    ];

    protected $casts = ['is_active' => 'boolean'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($unit) {
            if (empty($unit->slug)) {
                $slug = Str::slug($unit->name);
                $base = $slug;
                $count = 1;
                while (static::where('slug', $slug)->exists()) { $slug = $base . '-' . $count; $count++; }
                $unit->slug = $slug;
            }
        });
    }

    public function scopeActive($query) { return $query->where('is_active', true); }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function getDirectorPhotoUrlAttribute(): ?string
    {
        if ($this->director_image) {
            // Check if it's a storage path or a direct public path
            if (str_starts_with($this->director_image, 'img/')) {
                return asset($this->director_image);
            }
            return asset('storage/' . $this->director_image);
        }
        if ($this->image) {
            // Fall back to unit image for director photo
            if (str_starts_with($this->image, 'img/')) {
                return asset($this->image);
            }
            return asset('storage/' . $this->image);
        }
        if ($this->lecturer && $this->lecturer->photo) {
            return asset('storage/' . $this->lecturer->photo);
        }
        $name = $this->director_name ?? $this->name;
        return 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&background=035F39&color=ffffff&size=300&bold=true';
    }

    public function getImageUrlAttribute(): ?string
    {
        if (!$this->image) return null;
        if (str_starts_with($this->image, 'img/')) {
            return asset($this->image);
        }
        return asset('storage/' . $this->image);
    }
}
