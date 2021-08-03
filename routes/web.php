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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
    
    Route::resource('/dashboard','DashboardController');
    Route::resource('/category','CategoryController');
    Route::post('/category_edit','CategoryController@editCategory')->name('edit_category');

    Route::resource('/job','JobController');
    
});
