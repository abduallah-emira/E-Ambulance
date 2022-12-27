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

// Route::middleware('auth:api')->get('/user', function (Request $request) {});


//user's api
Route::group(['middleware' =>'auth:api'],function(){


    Route::get('/user/signUp','userRegisterController@create')->name('userData.create');
    Route::post('/user/store','userRegisterController@store')->name('userData.store');
    // Route::get('/showUser','userRegisterController@showUserByPhone')->name('showUserByPhone');
    // Route::get('/show','userRegisterController@show')->name('userData.show');
    // Route::get('/edit','userRegisterController@edit')->name('userData.edit');
    // Route::post('/update','userRegisterController@update')->name('userData.update');



});
