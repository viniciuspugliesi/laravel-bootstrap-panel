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
 *  Auth Routes
 * ------------------------------------------------------------------------
 */
Route::group(['namespace' => 'Auth'], function(){

    /**
     * ------------------------------------------------------------------------
     *  Guest Routes
     * ------------------------------------------------------------------------
     */
    Route::group(['middleware' => 'guest:user'], function() {

        /**
         * --------------------------------------------------------------------
         *  Login Routes
         * --------------------------------------------------------------------
         */
        Route::get('/login', 'LoginController@index');
        Route::post('/login', 'LoginController@login');

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
     *  Logout Route
     * ------------------------------------------------------------------------
     */
    Route::get('/logout', 'LoginController@logout');
});



/**
 * ------------------------------------------------------------------------
 *  Authenticated Routes
 * ------------------------------------------------------------------------
 */
Route::group(['middleware' => 'auth:user'], function(){
    /**
     * --------------------------------------------------------------------
     * Verify Email Routes
     * --------------------------------------------------------------------
     */
    Route::get('/verificar-email', 'VerificationController@index')->middleware('');

    /**
     * ------------------------------------------------------------------------
     *  Verified Email Routes
     * ------------------------------------------------------------------------
     */
    Route::group(['middleware' => 'verified:user'], function() {

        Route::get('/', function () {
            return view('welcome');
        });
    });
});
