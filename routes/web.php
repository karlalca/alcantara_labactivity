<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('team', function () {
    return view('team');
});
Route::get('services', function () {
    return view('services');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('portfolio', function () {
    return view('portfolio');
});