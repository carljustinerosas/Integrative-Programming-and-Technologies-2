<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Subjects;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function index(){
        $courses = Courses::with('subjects')->get();
        return view('courses', compact('courses'));

    }
}
