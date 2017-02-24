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

Route::get('/', 'BlogController@index');

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'posts'], function() {
        Route::get('', ['as' => 'admin.posts.index', 'uses' => 'BlogAdminController@index']);
        Route::get('create', ['as' => 'admin.posts.create', 'uses' => 'BlogAdminController@create']);
        Route::post('store', ['as' => 'admin.posts.store', 'uses' => 'BlogAdminController@store']);
        Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'BlogAdminController@edit']);
        Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses' => 'BlogAdminController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'BlogAdminController@destroy']);
    });
});


