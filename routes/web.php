<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/guest', 'Admin\ProductController@show')->name('show');

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

    Route::get('/dashboard','HomeController@index')->name('home');
    Route::get('/products','ProductController@index')->name('products');
    Route::get('/add_new_product','ProductController@create')->name('create_form_product');
    Route::any('/store','ProductController@store')->name('store');
    Route::get('/delete_product/{id}','ProductController@destroy')->name('delete_product');
    Route::get('/edit_product/{id}','ProductController@edit')->name('edit_form_product');
    Route::post('/update/{id}','ProductController@update')->name('update_product');
    Route::get('/byCategory', 'ProductController@getByCategory')->name('getByCategory');

    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
    });
});

