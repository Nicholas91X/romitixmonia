<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;

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



Auth::routes();

Route::prefix("admin")->namespace("Admin")->middleware(["auth"])->group(function() {
    Route::resource("videos", "VideoController");
    Route::resource("categories", "CategoryController");
    Route::resource("pictures", "PictureController");
    // Route::resource("songs", "SongController");
    Route::get('/home', 'HomeController@index')->name('home');
});


Route::get("auth/download/login", [DownloadController::class, "login"])->name("auth.login");
Route::get("auth/download/register", [DownloadController::class, "register"])->name("auth.register");
Route::post("auth/download/save", [DownloadController::class, "save"])->name("auth.save");
Route::post("auth/download/check", [DownloadController::class, "check"])->name("auth.check");

Route::group(["middleware" => ["AuthCheck"]], function(){    
    Route::get("/brani", [DownloadController::class, "brani"]);
});


Route::get("{any?}", function () {
    return view('welcome');
})->where("any", ".*");
