<?php

Route::get('/',                     ['as' => 'index',                   'uses' => 'PageController@index']);
Route::get('/about',                ['as' => 'about',                   'uses' => 'PageController@about']);
Route::get('/examples',             ['as' => 'examples',                'uses' => 'PageController@examples']);
Route::get('/admin',                ['as' => 'admin',                   'uses' => 'AcpController@index']);
Route::get('/admin/users',          ['as' => 'admin.users',             'uses' => 'AcpController@users']);
Route::get('/admin/guide/frontend', ['as' => 'admin.guide.frontend',    'uses' => 'AcpController@frontend']);
Route::get('/admin/guide/backend',  ['as' => 'admin.guide.backend',     'uses' => 'AcpController@backend']);

// Adminstration Example Pages
Route::get('/admin/svg',            ['as' => 'admin.svg',               'uses' => 'AcpController@svg']);
Route::get('/admin/morris',         ['as' => 'admin.morris',            'uses' => 'AcpController@morris']);
Route::get('/admin/easypie',        ['as' => 'admin.easypie',           'uses' => 'AcpController@easypie']);

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
