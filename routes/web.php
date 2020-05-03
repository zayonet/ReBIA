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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// E-mail verification
Route::get('verification/user', 'VerifyUserRegisterController@index')->name('verication.user');
Route::get('verification/user/{code}', 'VerifyUserRegisterController@verify')->name('confirm.register.user');

/* Route::get('/profile', 'HomeController@profile');

Route::get('/personal-informations', 'User\\PersonalInformationController@index')->name('user.info');
Route::post('/store/personal-informations', 'User\\PersonalInformationController@store'); */
      /*   Route::post('photos/remove', 'User\\InfoPhotoController@removePhoto')->name('user.photo.remove'); */