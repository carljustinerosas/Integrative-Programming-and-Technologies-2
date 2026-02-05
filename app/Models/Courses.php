<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subjects;

class Courses extends Model
{
    protected $fillable = [
        'course_name',
        'description',
    ];

    // One course has many subjects
    public function subjects()
    {
        return $this->hasMany(Subjects::class, 'course_id');
    }
}
