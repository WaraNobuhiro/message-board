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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
//CRUD
Route::post('messages','MessagesController@store')->name('messages.store');
Route::put('messages/{id}','MessagesController@update')->name('messages.update');
Route::delete('messages/{id}','MessagesController@destroy')->name('messages.destroy');

//index
Route::get('messages','MessagesController@incex')->name('messages.index');

//create
Route::get('messages/create','MessagerController@create')->name('messages.create');

//show
Route::get('messages/{id}','MessagesController@show')->name('messages.show');

//edit
Route::get('messages/{id}/edit','MessagesController@edit')->name('messages.edit');
*/

Route::get('/', 'MessagesController@index');
Route::resource('messages', 'MessagesController');
