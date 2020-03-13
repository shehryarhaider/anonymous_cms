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
Route::group(['middleware'=>'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard/edit-profile', 'DashboardController@editProfile')->name('edit-profile');
    Route::post('/dashboard/update-profile', 'DashboardController@updateProfile')->name('update-profile');
    Route::get('/dashboard/resume','DashboardController@resume')->name('resume');
    Route::get('/dashboard/resume/edit','DashboardController@editResume')->name('edit-resume');
    Route::get('/dashboard/work-done','DashboardController@workDone')->name('work-done');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// route::get('/', function() {
//     return redirect(env('FILE_URL'));
// })->name('website');

Auth::routes();


