<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\Auditable;

class DepartmentNews extends Model
{
    use Auditable;
    protected $fillable = [
        'department_id', 'title', 'slug', 'excerpt', 'body',
        'image', 'is_published', 'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($news) {
            if (empty($news->slug)) {
                $slug = Str::slug($news->title);
                $base = $slug;
                $count = 1;
                while (static::where('slug', $slug)->exists()) {
                    $slug = $base . '-' . $count;
                    $count++;
                }
                $news->slug = $slug;
            }
        });
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
