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

Route::redirect('/', 'login');

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('account', 'ProfileController');
    Route::resource('transactions', 'TransactionsController');


    Route::resource('setting/general', 'Setting\IndexController');

    Route::group(['prefix' => 'master-data'], function () {
        Route::resource('users', 'MasterData\UserController');
        Route::resource('bank', 'MasterData\BankController');
        Route::resource('akun-bank', 'MasterData\AkunBankController');
        Route::resource('kategori-pembukuan', 'MasterData\KategoriController');
    });

    Route::group(['prefix' => 'reports'], function () {
        // 
    });
});
