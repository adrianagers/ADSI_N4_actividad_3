<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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
    return view('index');
});


Route::get('files',[FileController::class,'index'])->name('files.index');
Route::get('files/{id}',[FileController::class,'show'])->name('files.show');
Route::get('files/{id}/edit',[FileController::class,'edit'])->name('files.edit');
Route::put('files/{id}',[FileController::class,'update'])->name('files.update');
Route::get('file/create',[FileController::class,'create'])->name('files.create');
Route::post('file',[FileController::class,'store'])->name('files.store');
Route::delete('files/{id}',[FileController::class,'destroy'])->name('files.destroy');

Route::get('students',[StudentController::class,'index'])->name('students.index');
Route::get('students/{id}',[StudentController::class,'show'])->name('students.show');
Route::get('students/{id}/edit',[StudentController::class,'edit'])->name('students.edit');
Route::put('students/{id}',[StudentController::class,'update'])->name('students.update');
Route::get('student/create',[StudentController::class,'create'])->name('students.create');
Route::post('student',[StudentController::class,'store'])->name('students.store');
Route::delete('students/{id}',[StudentController::class,'destroy'])->name('students.destroy');

Route::get('teachers',[TeacherController::class,'index'])->name('teachers.index');
Route::get('teachers/{id}',[TeacherController::class,'show'])->name('teachers.show');
Route::get('teachers/{id}/edit',[TeacherController::class,'edit'])->name('teachers.edit');
Route::put('teachers/{id}',[TeacherController::class,'update'])->name('teachers.update');
Route::get('teacher/create',[TeacherController::class,'create'])->name('teachers.create');
Route::post('teacher',[TeacherController::class,'store'])->name('teachers.store');
Route::delete('teachers/{id}',[TeacherController::class,'destroy'])->name('teachers.destroy');