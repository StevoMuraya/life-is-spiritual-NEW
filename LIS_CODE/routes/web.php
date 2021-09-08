<?php

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\BlogsController;
use App\Http\Controllers\backend\BooksController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\RegisterController;
use App\Http\Controllers\backend\VideosController;
use App\Http\Controllers\frontend\AboutUsControl;
use App\Http\Controllers\frontend\BlogsCotrol;
use App\Http\Controllers\frontend\BookControl;
use App\Http\Controllers\frontend\ContactCotrol;
use App\Http\Controllers\frontend\GalleryControl;
use App\Http\Controllers\frontend\HomeControl;
use App\Http\Controllers\frontend\VideoControl;
use Illuminate\Support\Facades\Route;

Route::post('logout', [LoginController::class,'logout']) ->name('logout');
Route::post('about_one', [HomeController::class,'about_us_one']) ->name('about_one');
Route::post('about_two', [HomeController::class,'about_us_two']) ->name('about_two');

Route::post('about_us_one', [AboutController::class,'about_one']) ->name('about_us_one');
Route::post('about_us_two', [AboutController::class,'about_two']) ->name('about_us_two');
Route::post('about_us_three', [AboutController::class,'about_three']) ->name('about_us_three');
Route::post('about_us_four', [AboutController::class,'about_four']) ->name('about_us_four');
Route::post('about_us_five', [AboutController::class,'about_five']) ->name('about_us_five');

Route::resource('/', HomeControl::class);
Route::resource('home', HomeControl::class);
Route::resource('books', BookControl::class);
Route::resource('about', AboutUsControl::class);
Route::resource('gallery', GalleryControl::class);
Route::resource('videos', VideoControl::class);
Route::resource('blogs', BlogsCotrol::class);
Route::resource('contact', ContactCotrol::class);

Route::resource('register', RegisterController::class);
Route::resource('login', LoginController::class);
Route::resource('home-admin', HomeController::class);
Route::resource('about-admin', AboutController::class);
Route::resource('books-admin', BooksController::class);
Route::resource('gallery-admin', GalleryController::class);
Route::resource('blogs-admin', BlogsController::class);
Route::resource('videos-admin', VideosController::class);