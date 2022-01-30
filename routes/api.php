<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::POST('/post', 'App\Http\Controllers\ContactController@postName')->name('save_post');

Route::POST('/delete-me', function(Request $request){
    return($request['name']);
});

Route::POST('/test', function(Request $request){

    if (isset($request['name'])){
        return ["message"=>"el name está seteado"];
    } else {
        return $request['data'];
    }
});