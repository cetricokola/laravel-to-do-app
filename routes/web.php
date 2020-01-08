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
Route::get('/', 'TasksController@index');
Route::post('add_task', 'TasksController@store');
Route::get('show_tasks', 'TasksController@store');
Route::put('complete_task/{$id}', 'TasksController@update');
Route::delete('delete_task/{$id}', 'TasksController@destroy');
