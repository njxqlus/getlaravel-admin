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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('cp', 'CPController@index')->name('cp');

Route::group(['prefix' => 'cp', 'as' => 'cp.'], function ()
{
    Route::group(['prefix' => 'rbac', 'as' => 'rbac.'], function ()
    {

        Route::resource('roles', 'CP\RBAC\RoleController');

        Route::resource('permissions', 'CP\RBAC\PermissionController');

    });

    Route::resource('users', 'CP\UserController');
});
