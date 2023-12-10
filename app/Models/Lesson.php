<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public static function getAllLessons() : Collection
    {
        return DB::table('lessons')->get();
    }

    public static function getAllLessonsOrdered() : Collection
    {
        return DB::table('lessons')
        ->orderBy('date', 'ASC')
        ->orderBy('time', 'ASC')
        ->get();
    }

    public static function addLesson($acronym, $date, $time) : void
    {
        DB::table('lessons')->insert(['acronym' => $acronym, 'date' => $date, 'time', $time]);
    }

    public static function removeLesson($acronym) : void
    {
        DB::table('lessons')->where('acronym', $acronym)->delete();
    }

    public static function updateLesson($acronym, $date, $time) : void
    {
        DB::table('lessons')->where('acronym', $acronym)->update(['date' => $date, 'time' => $time]);
    }

}
