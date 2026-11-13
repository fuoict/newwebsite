<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = [
        'category',
        'title',
        'file_path',
        'external_url',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public const CATEGORIES = [
        'general' => 'General Downloads',
        'students' => 'Student Downloads',
        'staff' => 'Staff Downloads',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Link shown on the public download pages.
     * Uploaded files are served through the download.file route so the URL
     * works both on local dev (php artisan serve) and on production.
     */
    public function publicUrl(): ?string
    {
        if ($this->file_path) {
            return route('download.file', $this);
        }

        if ($this->external_url) {
            return $this->external_url;
        }

        return null;
    }

    public function isExternal(): bool
    {
        return empty($this->file_path) && !empty($this->external_url);
    }
}
