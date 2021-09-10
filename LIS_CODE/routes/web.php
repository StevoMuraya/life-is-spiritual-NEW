<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\BlogsCotrol;
use App\Http\Controllers\frontend\BookControl;
use App\Http\Controllers\frontend\HomeControl;
use App\Http\Controllers\frontend\AlbumControl;
use App\Http\Controllers\frontend\VideoControl;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\frontend\ContactCotrol;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\AlbumController;
use App\Http\Controllers\backend\BlogsController;
use App\Http\Controllers\backend\BooksController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\frontend\AboutUsControl;
use App\Http\Controllers\frontend\GalleryControl;
use App\Http\Controllers\backend\VideosController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\RegisterController;
use App\Http\Controllers\frontend\LoginControl;
use App\Http\Controllers\frontend\RegisterControl;

Route::post('logout', [LoginController::class,'logout']) ->name('logout');
Route::post('exit', [LoginControl::class,'logout']) ->name('exit');
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
Route::resource('albums', AlbumControl::class);
Route::resource('videos', VideoControl::class);
Route::resource('blogs', BlogsCotrol::class);
Route::resource('contact', ContactCotrol::class);
Route::resource('login', LoginControl::class);
Route::resource('register', RegisterControl::class);
Route::resource('login-admin', LoginController::class);


Route::group(['middleware' => ['admin']], function () {
    Route::resource('register-admin', RegisterController::class);
    Route::resource('home-admin', HomeController::class);
    Route::resource('about-admin', AboutController::class);
    Route::resource('books-admin', BooksController::class);
    Route::resource('albums-admin', AlbumController::class);
    Route::resource('gallery-admin', GalleryController::class);
    Route::resource('blogs-admin', BlogsController::class);
    Route::resource('videos-admin', VideosController::class);
});
