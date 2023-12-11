<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

//The route /students with the list of all students.
Route::get('/students', [StudentController::class,'getStudentsOrdered']);

Route::post('/students/addStudent', [StudentController::class, 'addStudent']);
Route::post('/students/removeStudent', [StudentController::class, 'removeStudent']);
Route::post('/students/updateStudent', [StudentController::class, 'updateStudent']);
Route::get('/students/{id}', [StudentController::class, 'consultStudent']);
