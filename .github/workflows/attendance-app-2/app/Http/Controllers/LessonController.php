<?php

namespace App\Http\Controllers;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public static function getAllLessons(){
        $lessons = Lesson::getAllLessons();
        return view('lessons', $lessons);
    }

    public static function getAllLessonsOrdered(){
        $lessonsOrdered = Lesson::getAllLessonsOrdered();
        return view('lessons', $lessonsOrdered);
    }

    public static function addLesson(Request $request){
        Lesson::addLesson($request->acronym, $request->date, $request->time);
        return redirect('lessons');
    }

    public static function removeLesson(Request $request){
        Lesson::removeLesson($request->acronym);
        return redirect('lessons');
    }

    public static function updateLesson(Request $request){
        Lesson::updateLesson($request->acronym, $request->date, $request->time);
        return redirect('lessons');
    }
}
