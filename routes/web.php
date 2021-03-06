<?php

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


Route::resource('/terms', 'TermsController'); //all in one
Route::resource('/courses', 'CoursesController'); //all in one

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
