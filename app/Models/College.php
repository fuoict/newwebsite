<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //
    protected $fillable = [
        'college_name',
        'college_abbr',
        'dean_name',
        'dean_image',
        'dean_speach_title',
        'dean_speach_desc',
        'about_college',
        'mission',
        'vision',
        'is_active'
    ];

    public function departments()
    {
        return $this->hasMany(Department::class, 'college_id');
    }

    public function programmes()
    {
        return $this->hasManyThrough(Programme::class, Department::class, 'college_id', 'department_id');
    }
}
