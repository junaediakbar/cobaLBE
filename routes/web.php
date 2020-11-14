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
})->name('homepage');

Route::get('/child', function () {
    return view('child');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/login', function () {
    //
//})->middleware('checkrole');

Route::get('/admin/index','HomeController@dashboardAdmin')->middleware('onlyAdmin');

