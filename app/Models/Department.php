<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'department_name',
        'department_code',
        'college_id',
        'hod_name',
        'hod_email',
        'hod_phone',
        'hod_image',
        'department_image',
        'department_description',
        'is_active'
    ];

    public function college(){
        return $this->belongsTo(College::class, 'college_id');
    }
}
