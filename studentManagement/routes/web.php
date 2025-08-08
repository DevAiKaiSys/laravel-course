<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SecondTestController;
use App\Http\Controllers\TeachersController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/teachers', function () {
    return Teacher::all();
}); */
// Route::get('/teachers', [TeachersController::class, 'index']);
// Route::get('/add-teacher', [TeachersController::class, 'add']);
// Route::get('/show-teacher/{id}', [TeachersController::class, 'show']);
// Route::get('/update-teacher/{id}', [TeachersController::class, 'update']);
// Route::get('/delete-teacher/{id}', [TeachersController::class, 'delete']);

Route::get('/add-data', [StudentController::class, 'addData']);
Route::get('/get-data', [StudentController::class, 'getData']);
Route::get('/update-data', [StudentController::class, 'updateData']);
Route::get('/delete-data', [StudentController::class, 'deleteData']);
