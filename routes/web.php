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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/food','HomeController@calculateFood')->name('calculate');
Route::post('/food','HomeController@math')->name('math');
Route::get('/dog','HomeController@createDog')->name('add_dog');
Route::post('/dog','HomeController@storeDog')->name('store_dog');
