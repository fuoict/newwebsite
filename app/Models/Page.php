<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'hero_title',
        'hero_subtitle',
        'hero_image',
        'images',
        'slug',
        'status',
        'template',
        'meta_title',
        'meta_description',
        'content',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'images' => 'array',
    ];
}
