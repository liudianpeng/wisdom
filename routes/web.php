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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'Controller@home')->name('home');
Route::get('/meun', 'Controller@meunModel');
Route::get('/getList', 'Controller@getList');

/**
 * 此人组下的路由为后端路由
 */
Route::group(['middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'Backend'], function (){

});