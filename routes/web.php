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

Route::get("/" , "App\\Http\\Controllers\\HomeController@index")->name("home");
Route::get("/about" , "App\\Http\\Controllers\\HomeController@about")->name("about");
Route::get("article/{slug}" , "App\\Http\\Controllers\\HomeController@single")->name("single");
Route::post("/insert-comment/{slug}" , "App\\Http\\Controllers\\HomeController@insertComment")->name("insert_comment");
Route::get("/contact" , "App\\Http\\Controllers\\HomeController@contact")->name("contact");
Route::get("profile/{userName}" , "App\\Http\\Controllers\\HomeController@profile")->name("profile");
Route::post("/logout" , "App\\Http\\Controllers\\HomeController@logaout")->name("logout");
Auth::routes();
Route::get("/" , "App\\Http\\Controllers\\HomeController@index")->name("home");
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
