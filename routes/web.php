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


/**
 * ------------------------------------------------------------------------
 *  Visitor Routes
 * ------------------------------------------------------------------------
 */
Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function(){
    /**
     * --------------------------------------------------------------------
     *  Login Routes
     * --------------------------------------------------------------------
     */
    Route::get('/login', 'LoginController@index');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout');

    /**
     * --------------------------------------------------------------------
     *  Forget Password Routes
     * --------------------------------------------------------------------
     */
    Route::post('/esqueceu-sua-senha', 'ForgotPasswordController@store');

    /**
     * --------------------------------------------------------------------
     *  Reset Password Routes
     * --------------------------------------------------------------------
     */
    Route::get('/recuperar-senha', 'ResetPasswordController@index');
    Route::post('/recuperar-senha', 'ResetPasswordController@store');
});


Route::get('/', function () {
    return view('welcome');
});
