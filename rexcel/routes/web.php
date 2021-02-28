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

Route::get('/', function () {
    return view('welcome');
});

Route::get('registration','Crud\RegistrationController@index');
Route::post('/save','Crud\RegistrationController@store');
Route::get('/registration_show','Crud\RegistrationController@show');
Route::get('user/edit/{id}','Crud\RegistrationController@edit');
Route::post('user/update','Crud\RegistrationController@update');
Route::get('/user/delete/{id}','Crud\RegistrationController@delete');