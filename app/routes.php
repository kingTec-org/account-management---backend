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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/get/accounts', array(
		'as'	=>	'getaccounts',
		'uses'	=>	'AccountController@getAllAccount'
));
Route::get('/add/account', array(
		'as'	=>	'addAccount',
		'uses'	=>	'AccountController@addAccount'
));
Route::get('/add/location', array(
		'as'	=>	'addLocation',
		'uses'	=>	'LocationController@addLocation'
));
Route::get('/add/voucher_type', array(
		'as'	=>	'addVoucherType',
		'uses'	=>	'FilterController@addVoucherType'
));
Route::post('/add/account_type', array(
		'as'	=>	'addAccountType',
		'uses'	=>	'FilterController@addAccountType'
));

Route::get('/get/locations', array(
		'as'	=>	'getLocations',
		'uses'	=>	'LocationController@getAllLocation'
));
Route::get('/get/next/voucherno', array(
		'as'	=>	'nextVoucherNo',
		'uses'	=>	'VoucherController@nextVoucherNo'
));
Route::get('/add/voucher', array(
		'as'	=>	'addVoucher',
		'uses'	=>	'VoucherController@addVoucher'
));
Route::get('/report/get/balance', array(
		'as'	=>	'getBalance',
		'uses'	=>	'ReportController@getBalanceOfAccount '
));
Route::get('/report/get/voucher', array(
		'as'	=>	'getVoucher',
		'uses'	=>	'ReportController@getVoucher'
));
Route::post('/edit/location', array(
		'as'	=>	'editLocation',
		'uses'	=>	'LocationController@editLocation'
));

Route::get('/edit/account', array(
		'as'	=>	'editAccount',
		'uses'	=>	'AccountController@editAccount'
));



