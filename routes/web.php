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
Route::prefix('userData')->group(function(){

    Route::get('/index','userRegisterController@create')->name('userData.create');
    Route::post('/store','userRegisterController@store')->name('userData.store');
    Route::get('/showUser','userRegisterController@showUserByPhone')->name('showUserByPhone');
    Route::get('/show','userRegisterController@show')->name('userData.show');
    Route::get('/edit','userRegisterController@edit')->name('userData.edit');
    Route::post('/update','userRegisterController@update')->name('userData.update');
});
