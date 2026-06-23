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
    ];

    protected $casts = [
        'lecture_date' => 'date',
    ];
}
