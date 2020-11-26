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


Route::get('/items','ItemController@index')->name('items.index')->middleware('auth');
Route::get('/items/create','ItemController@create')->name('items.create');
Route::post('/items','ItemController@store')->name('items.store');
Route::get('/items/{id}','ItemController@show')->name('items.show')->middleware('auth');
Route::delete('/items/{id}','ItemController@destroy')-> name('items.destroy')->middleware('auth');

Auth::routes([

    'register' => true
]);

Route::get('/home', 'HomeController@index')->name('home');
