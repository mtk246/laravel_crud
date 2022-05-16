<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UserAccController@index')->name('/');


/// API
Route::get('/api/user_acc', 'App\Http\Controllers\UserAccApiController@getUser')->name('api/user_acc');
