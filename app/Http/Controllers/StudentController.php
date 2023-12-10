<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
class StudentController extends Controller
{

    public static function getStudentsOrdered(Request $request)
    {
        $orderedStudents = Student::getAllStudentsOrdered();
        return view('students', ["students" => $orderedStudents]);
    }
    public static function getAllStudents(Request $request)
    {
        $students = Student::getAllStudents();
        return view('students', $students);
    }
    public static function addStudent(Request $request)
    {
        Student::addStudent($request->id, $request->first_name, $request->last_name);
        return redirect('students');
    }

    public static function removeStudent(Request $request)
    {
        Student::removeStudent($request->id);
        return redirect('students');
    }

    public static function updateStudent(Request $request)
    {
        Student::updateStudent($request->id, $request->first_name, $request->last_name);
        return redirect('students');
    }


    public static function consultStudent($id){
        return view('consult_student',['student' => Student::consultStudent($id)]);
    }
}
