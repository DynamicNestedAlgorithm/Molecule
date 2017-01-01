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
Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
Route::get('/projects', 'ProjectsController@index')->name('projects.index');
Route::post('/projects/store', 'ProjectsController@store')->name('projects.store');
Route::post('/projects/update/{id}', 'ProjectsController@update')->name('projects.update');
Route::get('/projects/edit/{id}', 'ProjectsController@edit')->name('projects.edit');
Route::get('/projects/delete/{id}', 'ProjectsController@destroy')->name('projects.delete');

Route::get('/development', 'DevelopmentController@index')->name('development.index');

Route::get('/teams', 'TeamsController@index')->name('teams.index');
Route::post('/teams/create', 'TeamsController@store')->name('teams.store');
Route::get('/teams/create', 'TeamsController@create')->name('teams.create');
Route::get('/teams/edit/{id}', 'TeamsController@edit')->name('teams.edit');
Route::get('/teams/update/{id}', 'TeamsController@update')->name('teams.update');
Route::get('/teams/delete/{id}', 'TeamsController@destroy')->name('teams.delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
