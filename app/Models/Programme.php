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

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');
    }
}
