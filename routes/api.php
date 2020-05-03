<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(['user' => 'API\UserController']);
//Route::apiResources(['personal' => 'API\PersonalController']);


Route::get('personal', 'API\PersonalController@get');

Route::post('personal', 'API\PersonalController@store');

Route::delete('personal/{id}', 'API\PersonalController@delete');

/* 
Route::get('/personal-informations', 'User\\PersonalInformationController@index')->name('user.info');
Route::post('/personal-informations', 'User\\PersonalInformationController@store'); */

//Route::get('/profile', 'User\\PersonalInformationController@profile')->name('user.profile');
/* 
Route::get('/personal-informations', 'User\\PersonalInformationController@index')->name('user.info');
Route::post('/save-user-info', 'User\\PersonalInformationController@store')->name('user.info.save');
Route::post('/update-user-info/{info}', 'User\\PersonalInformationController@update')->name('user.info.update'); */
