<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'section', 'layout_type', 'parent_slug', 'route_name', 'icon',
        'intro', 'body', 'members', 'officers', 'downloads', 'gallery',
        'banner_image', 'banner_text', 'mission', 'vision',
        'sidebar_links', 'sort_order', 'is_active',
    ];

    protected $casts = [
        'members'       => 'array',
        'officers'      => 'array',
        'downloads'     => 'array',
        'gallery'       => 'array',
        'sidebar_links' => 'array',
        'blocks'        => 'array',
        'is_active'     => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($page) {
            if (empty($page->slug)) {
                $slug = Str::slug($page->title);
                $base = $slug;
                $count = 1;
                while (static::where('slug', $slug)->exists()) { $slug = $base . '-' . $count; $count++; }
                $page->slug = $slug;
            }
        });
    }

    public function scopeActive($query) { return $query->where('is_active', true); }
    public function scopeSection($query, $section) { return $query->where('section', $section); }

    public function getBannerImageUrlAttribute(): ?string
    {
        return $this->banner_image ? asset('storage/' . $this->banner_image) : null;
    }
}
