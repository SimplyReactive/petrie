<?php

Route::get('/',                     ['as' => 'index',                   'uses' => 'PageController@index']);
Route::get('/about',                ['as' => 'about',                   'uses' => 'PageController@about']);
Route::get('/examples',             ['as' => 'examples',                'uses' => 'PageController@examples']);
Route::get('/admin',                ['as' => 'admin',                   'uses' => 'AcpController@index']);
Route::get('/admin/svg',            ['as' => 'admin.svg',               'uses' => 'AcpController@svg']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
