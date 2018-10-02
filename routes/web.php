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

/*Route::get('/', function () {
    return view('welcome');
})->name('homepage');*/
Route::get('/', 'JudgementController@index')
    ->name('top');
Route::get('login', 'AuthController@index')
    ->name('login');
Route::post('login', 'AuthController@login')
    ->name('login.request');
Route::post('logout', 'AuthController@logout')
    ->name('logout');