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


Route::get('/', 'TaskController@index')->name('task.index');
Route::get('/task/create', 'TaskController@create')->name('task.create');
Route::get('/task/edit/{id}', 'TaskController@edit')->name('task.edit');
Route::put('/task/update/{id}', 'TaskController@update')->name('task.update');
Route::post('/store', 'TaskController@store')->name('task.store');
Route::delete('/delete/{id}', 'TaskController@delete')->name('task.delete');


