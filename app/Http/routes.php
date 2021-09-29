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
Route::get('/submission', function () {
    return view('submission', [
        'page' => "author's guide - submission"
    ]);
});
Route::get('/registration', function () {
    return view('registration', [
        'page' => "author's guide - registration"
    ]);
});
Route::get('/speakers', function () {
    return view('speakers', [
        'page' => "speakers"
    ]);
});
Route::get('/program', function () {
    return view('program', [
        'page' => "program"
    ]);
});
Route::get('/committee', function () {
    return view('committee', [
        'page' => "committee"
    ]);
});