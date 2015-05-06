<?php

Route::get('/',                     ['as' => 'index',                   'uses' => 'PageController@index']);
Route::get('/about',                ['as' => 'about',                   'uses' => 'PageController@about']);
Route::get('/examples',             ['as' => 'examples',                'uses' => 'PageController@examples']);
Route::get('/admin',                ['as' => 'admin',                   'uses' => 'AcpController@index']);

// Adminstration Example Pages
Route::get('/admin/svg',            ['as' => 'admin.svg',               'uses' => 'AcpController@svg']);
Route::get('/admin/morris',         ['as' => 'admin.morris',            'uses' => 'AcpController@morris']);
Route::get('/admin/easypie',        ['as' => 'admin.easypie',           'uses' => 'AcpController@easypie']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
