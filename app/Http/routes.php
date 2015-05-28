<?php

Route::get('/',                         ['as' => 'index',                   'uses' => 'PageController@index']);
Route::get('/about',                    ['as' => 'about',                   'uses' => 'PageController@about']);
Route::get('/examples',                 ['as' => 'examples',                'uses' => 'PageController@examples']);

// Adminstration Example Pages
Route::get('/admin',                    ['as' => 'admin',                   'uses' => 'AcpController@index']);
Route::get('/admin/users',              ['as' => 'admin.users',             'uses' => 'AcpController@users']);
Route::get('/admin/guide/frontend',     ['as' => 'admin.guide.frontend',    'uses' => 'AcpController@frontend']);
Route::get('/admin/guide/backend',      ['as' => 'admin.guide.backend',     'uses' => 'AcpController@backend']);
Route::get('/admin/svg',                ['as' => 'admin.svg',               'uses' => 'AcpController@svg']);
Route::get('/admin/morris',             ['as' => 'admin.morris',            'uses' => 'AcpController@morris']);
Route::get('/admin/easypie',            ['as' => 'admin.easypie',           'uses' => 'AcpController@easypie']);

Route::get('login',                     ['as' => 'login',                   'uses' => 'SessionController@create']);
Route::get('logout',                    ['as' => 'logout',                  'uses' => 'SessionController@destroy']);
Route::get('sessions/create',           ['as' => 'session.create',          'uses' => 'SessionController@create']);
Route::post('sessions/store',           ['as' => 'session.store',           'uses' => 'SessionController@store']);
Route::delete('sessions/destroy',       ['as' => 'session.destroy',         'uses' => 'SessionController@destroy']);

// Sentinel Registration
Route::get('register',                  ['as' => 'register.form',           'uses' => 'RegistrationController@registration']);
Route::post('register',                 ['as' => 'register.user',           'uses' => 'RegistrationController@register']);
Route::get('users/activate/{h}/{c}',    ['as' => 'activate',                'uses' => 'RegistrationController@activate']);
Route::get('reactivate',                ['as' => 'reactivate.form',         'uses' => 'RegistrationController@resendActivationForm']);
Route::post('reactivate',               ['as' => 'reactivate.send',         'uses' => 'RegistrationController@resendActivation']);
Route::get('forgot',                    ['as' => 'forgot.form',             'uses' => 'RegistrationController@forgotPasswordForm']);
Route::post('forgot',                   ['as' => 'reset.request',           'uses' => 'RegistrationController@sendResetPasswordEmail']);
Route::get('reset/{hash}/{code}',       ['as' => 'reset.form',              'uses' => 'RegistrationController@passwordResetForm']);
Route::post('reset/{hash}/{code}',      ['as' => 'reset.password',          'uses' => 'RegistrationController@resetPassword']);

// Sentinel Profile
Route::get('profile',                   ['as' => 'profile.show',            'uses' => 'ProfileController@show']);
Route::get('profile/edit',              ['as' => 'profile.edit',            'uses' => 'ProfileController@edit']);
Route::put('profile',                   ['as' => 'profile.update',          'uses' => 'ProfileController@update']);
Route::post('profile/password',         ['as' => 'profile.password',        'uses' => 'ProfileController@changePassword']);

// Sentinel Users
Route::get('users',                     ['as' => 'users.index',             'uses' => 'UserController@index']);
Route::get('users/create',              ['as' => 'users.create',            'uses' => 'UserController@create']);
Route::post('users',                    ['as' => 'users.store',             'uses' => 'UserController@store']);
Route::get('users/{hash}',              ['as' => 'users.show',              'uses' => 'UserController@show']);
Route::get('users/{hash}/edit',         ['as' => 'users.edit',              'uses' => 'UserController@edit']);
Route::post('users/{hash}/password',    ['as' => 'password.change',         'uses' => 'UserController@changePassword']);
Route::post('users/{hash}/memberships', ['as' => 'users.memberships',       'uses' => 'UserController@updateGroupMemberships']);
Route::put('users/{hash}',              ['as' => 'users.update',            'uses' => 'UserController@update']);
Route::delete('users/{hash}',           ['as' => 'users.destroy',           'uses' => 'UserController@destroy']);
Route::get('users/{hash}/suspend',      ['as' => 'users.suspend',           'uses' => 'UserController@suspend']);
Route::get('users/{hash}/unsuspend',    ['as' => 'users.unsuspend',         'uses' => 'UserController@unsuspend']);
Route::get('users/{hash}/ban',          ['as' => 'users.ban',               'uses' => 'UserController@ban']);
Route::get('users/{hash}/unban',        ['as' => 'users.unban',             'uses' => 'UserController@unban']);

// Sentinel Groups
Route::get('groups',                    ['as' => 'groups.index',            'uses' => 'GroupController@index']);
Route::get('groups/create',             ['as' => 'groups.create',           'uses' => 'GroupController@create']);
Route::post('groups',                   ['as' => 'groups.store',            'uses' => 'GroupController@store']);
Route::get('groups/{hash}',             ['as' => 'groups.show',             'uses' => 'GroupController@show']);
Route::get('groups/{hash}/edit',        ['as' => 'groups.edit',             'uses' => 'GroupController@edit']);
Route::put('groups/{hash}',             ['as' => 'groups.update',           'uses' => 'GroupController@update']);
Route::delete('groups/{hash}',          ['as' => 'groups.destroy',          'uses' => 'GroupController@destroy']);