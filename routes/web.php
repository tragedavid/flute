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

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/note/create', 'NotesController@create')->name('create_note');
Route::post('/note/insert', 'NotesController@insert')->name('insert_note');
Route::get('/notes', 'NotesController@list')->name('note_list');


Route::get('/home', 'HomeController@index')->name('home');
