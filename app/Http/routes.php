<?php

Route::get('/',                         ['as' => 'index',                   	'uses' => 'PageController@index']);
Route::get('/',                         ['as' => 'home',                    	'uses' => 'PageController@index']);
Route::get('/about',                    ['as' => 'about',                   	'uses' => 'PageController@about']);
Route::get('/examples',                 ['as' => 'examples',                	'uses' => 'PageController@examples']);
Route::get('/admin',                    ['as' => 'admin',                   	'uses' => 'AcpController@index']);

// Adminstration Example Pages
Route::get('/admin/guide/frontend',     ['as' => 'admin.guide.frontend',    	'uses' => 'AcpController@frontend']);
Route::get('/admin/guide/backend',      ['as' => 'admin.guide.backend',     	'uses' => 'AcpController@backend']);
Route::get('/admin/svg',                ['as' => 'admin.svg',               	'uses' => 'AcpController@svg']);
Route::get('/admin/morris',             ['as' => 'admin.morris',            	'uses' => 'AcpController@morris']);
Route::get('/admin/easypie',            ['as' => 'admin.easypie',           	'uses' => 'AcpController@easypie']);

// User Administration
Route::get('/admin/users',              ['as' => 'admin.users.index',         	'uses' => 'AcpController@users']);
Route::get('/admin/users/{hash}',       ['as' => 'admin.users.show',      		'uses' => 'UserController@show']);
Route::get('/admin/users/{hash}/edit',  ['as' => 'admin.users.edit',      		'uses' => 'UserController@edit']);

// Sentinel Session Routes
Route::get('login',                     ['as' => 'sentinel.login',           	'uses' => 'SessionController@create']);
Route::get('logout',                    ['as' => 'sentinel.logout',          	'uses' => 'SessionController@destroy']);
Route::get('sessions/create',           ['as' => 'sentinel.session.create',  	'uses' => 'SessionController@create']);
Route::post('sessions/store',           ['as' => 'sentinel.session.store',   	'uses' => 'SessionController@store']);
Route::delete('sessions/destroy',       ['as' => 'sentinel.session.destroy', 	'uses' => 'SessionController@destroy']);

// Sentinel Registration
Route::get('register',                  ['as' => 'sentinel.register.form',   	'uses' => 'RegistrationController@registration']);
Route::post('register',                 ['as' => 'sentinel.register.user',   	'uses' => 'RegistrationController@register']);
Route::get('users/activate/{h}/{c}',    ['as' => 'sentinel.activate',        	'uses' => 'RegistrationController@activate']);
Route::get('reactivate',                ['as' => 'sentinel.reactivate.form', 	'uses' => 'RegistrationController@resendActivationForm']);
Route::post('reactivate',               ['as' => 'sentinel.reactivate.send', 	'uses' => 'RegistrationController@resendActivation']);
Route::get('forgot',                    ['as' => 'sentinel.forgot.form',     	'uses' => 'RegistrationController@forgotPasswordForm']);
Route::post('forgot',                   ['as' => 'sentinel.reset.request',   	'uses' => 'RegistrationController@sendResetPasswordEmail']);
Route::get('reset/{hash}/{code}',       ['as' => 'sentinel.reset.form',      	'uses' => 'RegistrationController@passwordResetForm']);
Route::post('reset/{hash}/{code}',      ['as' => 'sentinel.reset.password',  	'uses' => 'RegistrationController@resetPassword']);

// Sentinel Profiles
Route::get('profile',                   ['as' => 'sentinel.profile.show',    	'uses' => 'ProfileController@show']);
Route::get('profile/edit',              ['as' => 'sentinel.profile.edit',    	'uses' => 'ProfileController@edit']);
Route::put('profile',                   ['as' => 'sentinel.profile.update',  	'uses' => 'ProfileController@update']);
Route::post('profile/password',         ['as' => 'sentinel.profile.password',	'uses' => 'ProfileController@changePassword']);

// Sentinel Users
Route::get('users/create',              ['as' => 'sentinel.users.create',    	'uses' => 'UserController@create']);
Route::post('users',                    ['as' => 'sentinel.users.store',     	'uses' => 'UserController@store']);
Route::post('users/{hash}/password',    ['as' => 'sentinel.password.change', 	'uses' => 'UserController@changePassword']);
Route::post('users/{hash}/memberships', ['as' => 'sentinel.users.memberships',	'uses' => 'UserController@updateGroupMemberships']);
Route::put('users/{hash}',              ['as' => 'sentinel.users.update',    	'uses' => 'UserController@update']);
Route::delete('users/{hash}',           ['as' => 'sentinel.users.destroy',   	'uses' => 'UserController@destroy']);
Route::get('users/{hash}/suspend',      ['as' => 'sentinel.users.suspend',   	'uses' => 'UserController@suspend']);
Route::get('users/{hash}/unsuspend',    ['as' => 'sentinel.users.unsuspend', 	'uses' => 'UserController@unsuspend']);
Route::get('users/{hash}/ban',          ['as' => 'sentinel.users.ban',       	'uses' => 'UserController@ban']);
Route::get('users/{hash}/unban',        ['as' => 'sentinel.users.unban',     	'uses' => 'UserController@unban']);

// Sentinel Groups
Route::get('groups',                    ['as' => 'sentinel.groups.index',     	'uses' => 'GroupController@index']);
Route::get('groups/create',             ['as' => 'sentinel.groups.create',    	'uses' => 'GroupController@create']);
Route::post('groups',                   ['as' => 'sentinel.groups.store',     	'uses' => 'GroupController@store']);
Route::get('groups/{hash}',             ['as' => 'sentinel.groups.show',      	'uses' => 'GroupController@show']);
Route::get('groups/{hash}/edit',        ['as' => 'sentinel.groups.edit',      	'uses' => 'GroupController@edit']);
Route::put('groups/{hash}',             ['as' => 'sentinel.groups.update',    	'uses' => 'GroupController@update']);
Route::delete('groups/{hash}',          ['as' => 'sentinel.groups.destroy',   	'uses' => 'GroupController@destroy']);