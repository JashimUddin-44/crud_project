<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;

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
    return view('welcome');
});

Route::get('/create',[StudentController::class,'create']);
Route::post('storedata',[StudentController::class,'store']);
Route::get('/studentlist_view',[StudentController::class,'show']);
Route::get('edit/{student_id}',[StudentController::class,'edits']);
Route::put('/update/{id}',[StudentController::class,'update']);
Route::get('student/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');
