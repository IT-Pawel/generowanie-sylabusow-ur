<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculumController;
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

Route::get('/',[CurriculumController::class,'index'])->name('home');

Route::get('/dodaj-sylabus',[CurriculumController::class,'addNewCurriculum']);

Route::get('/sylabus/{curriculum}',[CurriculumController::class,'show']);
Route::get('/sylabus/edit/{curriculum}',[CurriculumController::class,'edit']);
Route::get('/sylabus/delete/{curriculum}',[CurriculumController::class,'delete']);
Route::get('/sylabus/download/{curriculum}',[CurriculumController::class,'download']);