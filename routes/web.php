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

    Route::get('/job_list','JobController@index')->name('job_list');
    Route::get('/job_details/{id}','JobController@show')->name('job_details');
    Route::get('/jobs_by_category/{id}','JobController@jobsByCategory')->name('jobs_by_category');

    Route::get('/internship_list','InternshipController@index')->name('internship_list');
    Route::get('/internship_details/{id}','InternshipController@show')->name('internship_details');
    Route::get('/internships_by_category/{id}','InternshipController@internshipsByCategory')->name('internships_by_category');

    Route::get('/workshop_list','WorkshopController@index')->name('workshop_list');
    Route::get('/workshop_details/{id}','WorkshopController@show')->name('workshop_details');
    Route::get('/workshops_by_category/{id}','WorkshopController@workshopsByCategory')->name('workshop_by_category');
});
