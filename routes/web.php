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

Route::get('/links', 'LinkController@index')->name('linkLinks');

Route::post('/create', 'LinkController@create');

Route::get('/statistics/{id?}', 'LinkController@viewStat')->name('linkStatistics');

Route::get('/r/{link_token}', 'LinkController@redirect')->name('linkRedirect');
 
Route::get('/users{id?}', 'LinkController@viewUsers')->name('linkUsers');

//Route::get('/user/{id?}', 'LinkController@viewUserStat')->name('linkUsersStat');
