<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about-us', function () {
//     /* $name='tester1';
//     $email='tester1@gmail.com';
//     return view('aboutus')->with('name', $name)->with('email', $email); */
//     /* $name='tester2';
//     $email='tester2@gmail.com';
//     return view('aboutus', compact('name', 'email')); */
//     $name = 'tester3';
//     $email = 'tester3@gmail.com';
//     return view('aboutus', ['name' => $name, 'email' => $email]);
// });
/* Route::get('/about-us/{name}/{id}', function ($name, $id) {
    return view('aboutus', compact('name', 'id'));
}); */
/* Route::get('/about-us', function () {
    return view('aboutus');
}); */

/* Route::view('contect-us', 'contectus', ['name' => 'tester', 'email' => 'tester@gmail.com']); */
/* Route::view('contect-us/{name}/{id}', 'contectus'); */
Route::view('/contact-us', 'contactus');

/* Route::get('/students', [StudentController::class, 'index']);
Route::get('/about-us', [StudentController::class, 'aboutUs']); */
Route::controller(StudentController::class)->group(function () {
    Route::get('students', 'index');
    Route::get('about-us', 'aboutUs');
});
