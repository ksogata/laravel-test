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

Auth::routes();

Route::get('/', 'EmployeeController@index')->name('employees.index');

Route::get('/create', 'EmployeeController@create')->name('employees.create');
Route::post('/create', 'EmployeeController@store')->name('employees.store');

Route::get('/employees/{id}/edit', 'EmployeeController@edit')->name('employees.edit');
Route::post('/employees/update', 'EmployeeController@update')->name('employees.update');

Route::get('/employees/{id}/delete', 'EmployeeController@destroy')->name('employees.destroy');

