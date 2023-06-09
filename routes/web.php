<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[RouteController::class,'index'])->name('page.index');
Route::get('dashboard',[RouteController::class,'dashboard'])->name('page.dashboard');
Route::get('formations',[RouteController::class,'formations'])->name('page.formations');


Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');


Route::get('/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/delete/{id}',[StudentController::class,'delete'])->name('students.delete');
Route::post('/multi-delete', [StudentController::class, 'multiDelete'])->name('posts.multi-delete');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('posts.edit');




Route::get('promotions',[RouteController::class,'promotions'])->name('page.promotions');
Route::get('fincances',[RouteController::class,'finances'])->name('page.finances');
Route::get('dashboard/math',[RouteController::class,'math'])->name('page.math');
Route::get('dashboard/educationfinanciere',[RouteController::class,'education'])->name('page.education');



