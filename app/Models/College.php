<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //
    protected $fillable = [
        'college_name',
        'college_abbr',
        'college_dean',
        'is_active'
    ];
}
