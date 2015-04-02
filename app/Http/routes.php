<?php

Route::get('/',                     ['as' => 'index',                   'uses' => 'PageController@index']);
Route::get('/about',                ['as' => 'about',                   'uses' => 'PageController@about']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
