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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/get', 'App\Http\Controllers\ContactController@printData');
Route::GET('/get2/{name}', function($id){
    return ($id);
});

// Route::POST('/post', 'App\Http\Controllers\ContactController@postName')->name('save_post');