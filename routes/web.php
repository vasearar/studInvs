<?php

// Right Click -> Import All Classes (from PHP Namespace Resolver extension)

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/blog', [PostController::class, 'showPosts']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Prodius",
        "email" => "prodius345@gmail.com",
        "image" => "pict.jpeg"
    ]);
});

Route::get('/blog/{post:slug}', [PostController::class, 'showOne']);

Route::get('/categories', [CategoryController::class, 'showCategories']);

Route::get('/users', [UserController::class, 'showUsers']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'out']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/convertTo-Slug', [DashboardPostController::class, 'getSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/convertTo-Slug', [AdminCategoryController::class, 'getSlug'])->middleware('is_admin');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');