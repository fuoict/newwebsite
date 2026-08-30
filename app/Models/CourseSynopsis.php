<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Auditable;

class CourseSynopsis extends Model
{
    use Auditable;
    protected $fillable = [
        'department_id', 'course_code', 'course_title',
        'description', 'unit', 'level', 'type', 'is_published',
    ];

    protected $casts = [
        'unit'         => 'integer',
        'level'        => 'integer',
        'is_published' => 'boolean',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeLevel($query, $level)
    {
        return $query->where('level', $level);
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public static function types(): array
    {
        return ['core', 'elective', 'required'];
    }
}
