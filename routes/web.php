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
Use App\Article;

Route::get('/', function () {
    return view('welcome');
});
//User Admin
Route::get('/user', 'UserController@index');
Route::get('user/{id}', 'UserController@show');

Route::post('create', 'ValidationController@add');


Route::put('update/{id}','UserController@update');
Route::delete('delete/{id}', 'UserController@deleteuser');
//login
Route::post('User', 'UserController@createUser');
Route::post('login', 'UserController@userlogin');
//user Role
Route::Post('role','UserController@addrole');
//User profile
Route::post('profile','UserController@userprofile');
Route::get('profilelists','UserController@getprofile');
Route::get('profilelist/{id}','UserController@getoneprofile');