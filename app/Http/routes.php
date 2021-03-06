<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


    Route::get('/', 'HomeController@index');



    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

//    // 密码重置链接请求路由...
//    Route::get('password/email', 'Auth\PasswordController@getEmail');
//    Route::post('password/email', 'Auth\PasswordController@postEmail');
//    // 密码重置路由...
//    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
//    Route::post('password/reset', 'Auth\PasswordController@postReset');


    Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth'], function(){
        Route::get('/','IndexController@index');
        Route::resource('user', 'UserController');
        Route::resource('table', 'TableController');

        Route::post('table/{tid}/field/edit', 'FieldController@editfield');
        Route::get('table/{tid}/field/save', 'FieldController@savefield');
        Route::get('table/{tid}/field/{fid}/delete', 'FieldController@destroy');
        Route::resource('table.field', 'FieldController');

        Route::get('table/{tid}/data/template', 'DataController@template');
        Route::get('table/{tid}/data/download', 'DataController@download');
        Route::get('table/{tid}/data/{did}/delete', 'DataController@destroy');
        Route::resource('table.data', 'DataController');
    });
