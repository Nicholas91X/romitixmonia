<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/rmxtr", "Api\VideoController@index");
Route::get("/lunigianaCalling", "Api\VideoController@index2");
Route::get("/coverMonia", "Api\VideoController@index3");

Route::get("/foto", "Api\PictureController@index");
Route::get("/team", "Api\PictureController@index2");
Route::get("/home", "Api\PictureController@index3");




