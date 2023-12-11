<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{

    // Pour éviter que l'appel à 'db:seed' génère une erreur à cause des colonnes manquants
    public $timestamps = false;

    use HasFactory;

    public static function getAllStudents(): Collection
    {
        return DB::table('students')->get();
    }

    public static function getAllStudentsOrdered(): Collection
    {
        return DB::table('students')->orderBy('id', 'ASC')->get();
    }

    public static function addStudent(int $id, string $first_name, string $last_name): void
    {
        DB::table('students')->insert(['id' => $id, 'first_name' => $first_name, 'last_name'=>$last_name]);
    }

    public static function removeStudent(int $id): void
    {
        DB::table('students')->where('id', $id)->delete();
    }

    public static function updateStudent(int $id, string $first_name, string $last_name): void
    {
        DB::table('students')->where('id', $id)->update(['first_name' => $first_name, 'last_name' => $last_name]);
    }

    public static function consultStudent($id)
    {
        return DB::table('students')->where('id',$id)->get();
    }

}
