<?php

use Illuminate\support\Facades\Route;
use Illuminate\support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
    return view('auth.login');
});

// home
Route::get('/home','HomeController@index');
// // auth route
Route::get('/login','authController@login')->name('login');
Route::post('/postlogin','authController@postlogin');
Route::get('/register', 'authController@register')->name('register');
Route::post('/postregister','authController@postregister');
Route::get('/logout', 'authController@logout');

// route catatan perjalanan
Route::get('/perjalanan','PerjalananController@index');
Route::get('/perjalanan/tambah','PerjalananController@create');
Route::post('/perjalanan/store','PerjalananController@store');
Route::get('/perjalanan/destroy/{id}','PerjalananController@destroy');

// Profile
Route::get('/profile','userController@index');
Route::get('/profile/edit/{id}', 'userController@edit');
Route::post('/profile/update/{id}','userController@update');

// user

Route::get ('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::put('/user/update/{id}', 'UserController@update');
Route::get('/user/delete/{id}','UserController@destroy');
Route::get('/user/cari','UserController@cari');

// admin

Route::get('/dataUser','UserController@indexAdmin');

// pdf

Route::get('/cetak_pdf','UserController@cetak_pdf');
Route::get('/admin/destroy/{id}','UserController@destroyAdmin');

