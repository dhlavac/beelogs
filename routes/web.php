<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('index');
Route::get('/features', 'PagesController@features')->name('features');
Route::get('/extras', 'PagesController@extras')->name('extras');
Route::get('/pricing', 'PagesController@pricing')->name('pricing');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/apiaries', 'DashboardController@apiaries')->name('apiaries');
Route::get('/dashboard/hives', 'DashboardController@hives')->name('hives');
Route::get('/dashboard/queens', 'DashboardController@queens')->name('queens');

Route::get('/dashboard/apiaries/create', 'DashboardController@createApiary')->name('createApiary');
Route::get('/dashboard/queens/create', 'DashboardController@createQueen')->name('createQueen');
