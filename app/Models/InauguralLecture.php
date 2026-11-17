<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InauguralLecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'speaker_name',
        'lecture_date',
        'image_path',
        'slides_path',
        'event_url',
    ];

    protected $casts = [
        'lecture_date' => 'date',
    ];

    /** URL used to download/open the lecture slides (served via lecture-material route). */
    public function slidesUrl(): ?string
    {
        return $this->slides_path ? route('lecture-material', $this) : null;
    }
}
