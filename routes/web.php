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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'AuthController@login')->name('login');
Route::post('/do-login', 'AuthController@doLogin')->name('do_login');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/do-register', 'AuthController@doRegister')->name('do_register');
Route::get('/recover-password', 'AuthController@forgotPassword')->name('forgot_password');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/delete-user/{id}', 'DashboardController@deleteUser')->name('delete_user');
Route::get('/block-user/{id}', 'DashboardController@blockUser')->name('block_user');
Route::get('/add-user', 'DashboardController@addUser')->name('add_user');