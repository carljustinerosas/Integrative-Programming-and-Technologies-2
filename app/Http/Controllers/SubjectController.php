<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use App\Models\Courses;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subjects::all();
        return view('courses', compact('subjects'));

    }
}
