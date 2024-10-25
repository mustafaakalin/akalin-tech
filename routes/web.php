<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;


Route::post('/set-theme', function (Request $request) {
    $theme = $request->input('theme');
    Session::put('theme', $theme);
    return response()->json(['success' => true]);
});


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/projects/{id}', [ProjectController::class, 'detail'])->name('projectdetail');

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
