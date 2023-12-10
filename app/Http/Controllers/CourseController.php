<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public static function getAllCourses(){
        $courses = Course::getAllCourses();
        return view('courses', $courses);
    }

    public static function addCourse(Request $request){
        Course::addCourse($request->acronym, $request->name);
        return redirect('courses');
    }

    public static function removeCourse(Request $request){
        Course::removeCourse($request->acronym);
        return redirect('courses');
    }

    public static function updateCourse(Request $request){
        Course::updateCourse($request->id, $request->acronym, $request->name);
        return redirect('courses');
    }
}
