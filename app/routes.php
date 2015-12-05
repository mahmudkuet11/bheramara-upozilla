<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
*	Public Route
*/
Route::get('/', function()
{
	return View::make('hello');
});











/*
*	Admin Route
*/

Route::get('/admin/login', array(
		'as'	=>	'getAdminLogin',
		'uses'	=>	'AdminController@getAdminLogin'
	));

Route::post('/admin/login', array(
		'as'	=>	'postAdminLogin',
		'uses'	=>	'AdminController@postAdminLogin'
	));

Route::get('/admin/logout', array(
		'as'	=>	'getAdminLogout',
		'uses'	=>	'AdminController@getAdminLogout'
	));


Route::group(array('before'	=>	'auth'), function(){

	Route::get('/admin/dashboard', array(
			'as'	=>	'getAdminDashboard',
			'uses'	=>	'AdminController@getAdminDashboard'
		));

	Route::get('/admin/settings', array(
			'as'	=>	'getAdminSettings',
			'uses'	=>	'AdminController@getAdminSettings'
		));

	Route::post('/admin/settings', array(
			'as'	=>	'postAdminSettings',
			'uses'	=>	'AdminController@postAdminSettings'
		));

	Route::get('/admin/project/new', array(
			'as'	=>	'getAdminNewProject',
			'uses'	=>	'AdminController@getAdminNewProject'
		));

	Route::post('/admin/project/new', array(
			'as'	=>	'postAdminNewProject',
			'uses'	=>	'AdminController@postAdminNewProject'
		));

});
