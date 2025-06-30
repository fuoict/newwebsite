<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    //
    protected $fillable = [
        'department_id',
        'programme_name',
        'programme_type',
        'programme_code',
        'programme_description',
        'duration',
        'entry_requirements',
        'is_active'
    ];
}
