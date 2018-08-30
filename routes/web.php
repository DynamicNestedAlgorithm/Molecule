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

Route::get('/', 'PagesController@index'); 

Route::resource('projects','ProjectsController');
Route::get('/create', 'ProjectsController@create')->name('Projects.create');
Route::get('/Projects', 'ProjectsController@index')->name('projects.index');
Route::post('/projects/store', 'ProjectsController@store')->name('projects.store');
Route::post('/projects/update/{id}', 'ProjectsController@update')->name('projects.update');
Route::get('/projects/edit/{id}', 'ProjectsController@edit')->name('projects.edit');
Route::get('/projects/delete/{id}', 'ProjectsController@destroy')->name('projects.delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
