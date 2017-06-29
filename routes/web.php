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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::prefix('hospital')->group(function(){
  Route::get('/login', 'Auth\HospitalLoginController@showLoginForm')->name('hospital.login');
  Route::post('/login', 'Auth\HospitalLoginController@login')->name('hospital.login.submit');
  Route::get('/', 'HospitalController@index')->name('hospital.dashboard');
});

Route::prefix('doctor')->group(function(){
  Route::get('/login', 'Auth\DoctorLoginController@showLoginForm')->name('doctor.login');
  Route::post('/login', 'Auth\DoctorLoginController@login')->name('doctor.login.submit');
  Route::get('/', 'DoctorController@index')->name('doctor.dashboard');
});
