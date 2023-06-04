<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/clubs', function () {
    return view('pages.clubs');
});
Route::get('/clubform', function () {
    return view('pages.clubform');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/nurseryform', function () {
    return view('pages.nurseryform');
});
Route::get('/academics', function () {
    return view('pages.academics');
});

Route::get('/blog', function () {
    return view('pages.blog');
});


Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/facilities', function () {
    return view('pages.facilities');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
