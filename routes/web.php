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

Route::get('/', 'HomeController@index');

Auth::routes();

//custom routing for auth so that users are not logged in upon registration
Route::get('/auth/success', [
    'as'   => 'auth.success',
    'uses' => 'Auth\RegisterController@success'
]);

Route::resource('users', 'UserController', ['only' => [
    'index', 'show', 'edit', 'update', 'destroy'
]]);

Route::resource('surgeons', 'SurgeonController');

Route::resource('patients', 'PatientController');