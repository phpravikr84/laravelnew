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

Route::group(['prefix' => 'admin'], function(){

    
    Route::get('/', function() {
        return view('admin.login');
    })->name('login');

    Route::get('/login', function() {
        return view('admin.login');
    })->name('login');

    Route::post('/', [
        'uses' => 'AdminController@checkLogin',
        'as' => 'checklogin'
    ]);
    
    
    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard');

});

