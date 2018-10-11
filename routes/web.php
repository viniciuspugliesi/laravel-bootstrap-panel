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
 *  Guest Routes
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
     * ---------------------------------------------------------------------
     *  Register Routes
     * ---------------------------------------------------------------------
     */
    Route::get('/cadastro', 'RegisterController@index');
    Route::post('/cadastro', 'RegisterController@store');

    /**
     * --------------------------------------------------------------------
     *  Forget Password Routes
     * --------------------------------------------------------------------
     */
    Route::get('/esqueceu-sua-senha', 'ForgotPasswordController@index');
    Route::post('/esqueceu-sua-senha', 'ForgotPasswordController@store');

    /**
     * --------------------------------------------------------------------
     *  Reset Password Routes
     * --------------------------------------------------------------------
     */
    Route::get('/recuperar-senha', 'ResetPasswordController@index');
    Route::post('/recuperar-senha', 'ResetPasswordController@store');
});



/**
 * ------------------------------------------------------------------------
 *  Auth Routes
 * ------------------------------------------------------------------------
 */
Route::group(['middleware' => 'auth'], function(){

    /**
     * --------------------------------------------------------------------
     * Verify Email Routes
     * --------------------------------------------------------------------
     */
    Route::get('/verificar-email', 'VerificationController@index');

    /**
     * --------------------------------------------------------------------
     * Verified Email Routes
     * --------------------------------------------------------------------
     */
    Route::group(['middleware' => 'verified'], function() {

        Route::get('/', function () {
            return view('welcome');
        });
    });
});
