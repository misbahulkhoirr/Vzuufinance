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
Route::post('/v1/auth/signin', 'Api\V1\Auth\LoginController@login');

Route::group(['middleware' => 'auth:sanctum'],function () {
    Route::post('/v1/check-in', 'Api\V1\CheckIn\IndexController@store');
    Route::post('/v1/check-out', 'Api\V1\CheckOut\IndexController@store');
    Route::get('/v1/profile', 'Api\V1\Account\IndexController@index');
    Route::post('/v1/change-password', 'Api\V1\Account\IndexController@changePassword');
    Route::post('/v1/auth/signout', 'Api\V1\Account\IndexController@logout');
    Route::get('/v1/attendances', 'Api\V1\Attendance\IndexController@index');
    Route::get('/v1/permissions', 'Api\V1\Permission\IndexController@index');
    Route::post('/v1/permissions', 'Api\V1\Permission\IndexController@store');
    Route::get('/v1/permission-types', 'Api\V1\Permission\IndexController@permissionTypes');
    Route::get('/v1/statistics', 'Api\V1\Statistic\IndexController@index');
    Route::get('/v1/setting', 'Api\V1\Setting\IndexController@index');
   
});
