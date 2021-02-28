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

Route::get('loginadmin','AdminController@getPageForAdmin')->name('ADMIN');
Route::post('executeLoginAdmin','AdminController@checkLoginForAdmin');

//Admin For Execute Account (Admin thực thi các Account)
Route::get('add_account','AccountController@create')->name('ADD_ACCOUNT');

Route::post('addaccount','AccountController@store');

Route::get('management_account','AdminController@managementAccount')->name('MANAGEMENT_ACCOUNT');


//faculty Function
Route::get('management_faculty', 'FacultyController@manage_faculty')->name('MANAGEMENT_FACULTY');
Route::get('add_faculty', 'FacultyController@add')->name('ADD_FACULTY');
Route::post('addfaculty','FacultyController@addProcess');
Route::get('management_faculty/edit_faculty/{id}', 'FacultyController@edit');
Route::patch('management_faculty/{id}', 'FacultyController@editProcess');
Route::delete('management_faculty/{id}','FacultyController@delete');

// coordinator 
Route::get('management_coordinator','CoordinatorController@manage_coordinator')->name('MANAGEMENT_COORDINATOR');
Route::get('create_coordinator','CoordinatorController@add')->name('ADD_COORDINATOR');
Route::post('addcoordinator','CoordinatorController@storedCoordinator');
Route::get('management_coordinator/edit_coordinator/{id}', 'CoordinatorController@edit');
Route::patch('management_coordinator/{id}', 'CoordinatorController@editProcess');
Route::delete('management_coordinator/{id}','CoordinatorController@delete');

// Charts
Route::get('charts','ChartsController@index')->name('CHARTS');

//contribution

Route::get('contributions', 'CoordinatorController@contributions')->name('MANAGEMENT_CONTRIBUTION');
Route::get('comment', 'CoordinatorController@comment')->name('COMMENTS');

