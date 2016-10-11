<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('home.main');
});*/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/about', 'AboutController@index');

Route::resource('tasks', 'TaskController');



Route::resource('tasks', 'TaskController');

Route::resource('sitetodo', 'SitetodoController');

/*HARDWARE INVENTORY*/
//MAIN
Route::resource('hwinventory', 'HardwareinventoryController');

//HW MANUFACTURER
Route::resource('hwmanufacturer', 'HwmanufacturerController');

/*EMPLOYEES*/
Route::resource('employees', 'EmployeeController');

//Route::get('/showlog','ShowlogController@index');
