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
