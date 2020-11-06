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
    return view('auth.login');
});
Route::get('/todos', 'TodoController@index')->name('todos.index');
Route::post('/todos', 'TodoController@store')->name('todos.store');
Route::get('/todos/{id}/change', 'TodoController@changeStatus')->name('todos.change');
Route::delete('/todos/{id}', 'TodoController@destroy')->name('todos.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
