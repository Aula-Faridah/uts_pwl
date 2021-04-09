<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;


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

Route::get('/about', [PostController::class, 'index'])->name('about');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/program', function () {
    return view('program');
});
Route::get('/login', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('posts', PostController::class);

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('profile/edit', [HomeController::class, 'edit'])->name('profile.edit');

Route::put('profile/{id}', [HomeController::class, 'update'])->name('profile.update');

