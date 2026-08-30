<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Auditable;

class College extends Model
{
    use Auditable;
    //
    protected $fillable = [
        'college_name',
        'college_abbr',
        'slug',
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
