<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public static function getAllCourses() : Collection
    {
        return DB::table('courses')->get();
    }

    public static function addCourse($acronym, $name) : void
    {
        DB::table('courses')->insert(['acronym' => $acronym, 'name' => $name]);
    }

    public static function removeCourse($acronym) : void
    {
        DB::table('courses')->where('acronym', $acronym)->delete();
    }

    public static function updateCourse($id, $acronym, $name) : void
    {
        DB::table('courses')->where('id', $id)->update(['acronym' => $acronym, 'name' => $name]);
    }

}
