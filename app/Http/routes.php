<?php

Route::get('/',                     ['as' => 'index',                   'uses' => 'PageController@index']);
Route::get('/about',                ['as' => 'about',                   'uses' => 'PageController@about']);
Route::get('/examples',             ['as' => 'examples',                'uses' => 'PageController@examples']);
Route::get('/admin',                ['as' => 'admin',                   'uses' => 'PageController@admin']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
