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

Route::get('/','AdminController@getPageForAdmin');

Route::get('admin','AdminController@getLogin')->name('ADMIN');
Route::get('dashboardAdmin','AdminController@AdminDashboard')->name('DASHBOARD');
Route::post('executeLoginAdmin','AdminController@checkLoginForAdmin');

//Admin For Execute Account (Admin thực thi các Account)
//Account
Route::get('add_account','AccountController@create')->name('ADD_ACCOUNT');
Route::post('addaccount','AccountController@store');
Route::get('management_account','AccountController@index')->name('MANAGEMENT_ACCOUNT');//Show
Route::resource('manage_account', 'AccountController')->only('edit', 'update');//Update
Route::get('delete_account/{account_id}','AccountController@destroy');//Delete

//Phan quyen chuyentrang
Route::get('account','AccountController@loginAccount')->name('ACCOUNT');
Route::post('executeAccount','AccountController@executeLoginAccount');

//Student Function
Route::get('dashboardStudent','StudentController@StudentDashboard')->name('STUDENT');
Route::get('fileUpload','StudentController@create')->name('FILE_UPLOAD');
Route::post('executeUpload','StudentController@store');
Route::get('showUpload','StudentController@index')->name('SHOW_UPLOAD');
Route::resource('show_upload','StudentController')->only('edit', 'update');

//Faculty Function
Route::get('management_faculity', 'FaculityController@manage_faculity')->name('MANAGEMENT_FACULITY');
Route::get('add_faculity', 'FaculityController@add')->name('ADD_FACULITY');
Route::post('addfaculity','FaculityController@addProcess');
Route::get('management_faculity/edit_faculity/{id}', 'FaculityController@edit');
Route::patch('management_faculity/{id}', 'FaculityController@editProcess');
Route::delete('management_faculity/{id}','FaculityController@delete');

// Coordinator Function
Route::get('dashboardCoordinator','CoordinatorController@CoordinatorDashboard')->name('COORDINATOR');
Route::get('management_coordinator','CoordinatorController@manage_coordinator')->name('MANAGEMENT_COORDINATOR');
Route::get('create_coordinator','CoordinatorController@add')->name('ADD_COORDINATOR');
Route::post('addcoordinator','CoordinatorController@storedCoordinator');
Route::get('management_coordinator/edit_coordinator/{id}', 'CoordinatorController@edit');
Route::patch('management_coordinator/{id}', 'CoordinatorController@editProcess');
Route::delete('management_coordinator/{id}','CoordinatorController@delete');

// Coordinator Front End Function
Route::get('viewContribution','CoordinatorController@viewcontribution')->name('VIEW_CONTRIBUTION');
Route::get('addcomment/{id}', 'CoordinatorController@addcomment');
// Route::post('add_comment', 'CoordinatorController@addCommentProcess');

Route::patch('addcomment/{id}','CoordinatorController@addCommentProcess');


// Semester 
Route::get('semester', 'SemesterController@index')->name('MANAGEMENT_SEMESTER');
Route::get('add_semester', 'SemesterController@add_semester')->name('ADD_SEMESTER');
Route::post('semester', 'SemesterController@addSemesterProcess');
Route::delete('semester/{id}','SemesterController@deleteSemester');

