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
Route::get('/teachers', [TeachersController::class, 'index']);
