<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrollments;
use App\Courses;
use App\Subject;

class EnrollmentsController extends Controller
{
     public function index()
    {   
        
    }
    public function show($course_id, $student_id)
    {
        $enroll = Enrollments::where('course_id', $course_id)->where('student_id', $student_id)->first();
        $course = Courses::where('id', $course_id)->firstOrFail();
        $subjects = Subject::all();
        if($enroll){
            
            return view('courses')->with('course',$course)->with('enroll', $enroll)->with('subjects',$subjects);
            //return view('courses')->with('enroll',$enroll);
        }else {
            return view('courses')->with('course',$course);
        }
            
    }
    public function store($course_id, $student_id)
    {
        $enrollments = new Enrollments();
        $enrollments->course_id = $course_id;
        $enrollments->student_id = $student_id;
        $enrollments->save();
        
        return back();
        
    }
}
