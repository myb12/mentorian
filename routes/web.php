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

// Route::get('/', function () {
//     return view('welcome');
// });

//Admin section router
Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
    Route::resource('/dashboard','DashboardController');

    // Category section route 
    Route::resource('/category','CategoryController');
    Route::post('/category_edit','CategoryController@editCategory')->name('edit_category');

    // Job section route
    Route::resource('/job','JobController');

    // Internship section route
    Route::resource('/internship','InternshipController');

    // Event section route
    Route::resource('/event','EventController');

    // Workshop section route
    Route::resource('/workshop','WorkshopController');
    
});

//Website route section
Route::group(['namespace' => 'Site'], function () {
    Route::get('/','HomeController@index')->name('home');

    Route::get('/job_list','JobListController@index')->name('job_list');
    Route::get('/job_details/{id}','JobDetailsController@show')->name('job_details');

    Route::get('/internship_list','InternshipListController@index')->name('internship_list');
    Route::get('/internship_details/{id}','InternshipDetailsController@show')->name('internship_details');

    Route::get('/workshop_list','WorkshopListController@index')->name('workshop_list');
    Route::get('/workshop_details','WorkshopDetailsController@index')->name('workshop_details');
});
