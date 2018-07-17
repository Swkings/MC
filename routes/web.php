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

Route::get('/user',"Admin\UserController@index")->name('user');

Auth::routes();

Route::get('/home', 'Admin\UserController@project')->name('home');
Route::post('/mark', 'MarkController@index');
Route::post('/submitmark', 'FormController@index');
Route::get('/logout', 'MainController@index');
Route::get('/create', function (){
    return view('create');
});
