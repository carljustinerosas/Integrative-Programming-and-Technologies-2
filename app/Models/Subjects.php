<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;

class Subjects extends Model
{
    protected $fillable = [
        'subject_name',
        'subject_description',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
