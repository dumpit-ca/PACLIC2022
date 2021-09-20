<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home', [
        'page' => "home"
    ]);
});





Route::get('/contact', function () {
    return view('contact', [
        'page' => "contact us"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'page' => "about us"
    ]);
});