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

Auth::routes();


Route::get('/pronat', 'PronatController@index');
Route::get('/pronat-objekt', 'PronatController@objektet');


Route::get('/Shpalljet' , 'ShpalljetController@index');
Route::post('/pronat-store', 'PronatController@store');
Route::get('detaje/{id}', 'DetajeController@index');
Route::group(['middleware' => ['is_admin',]], function () {
    Route::get('/aprovim', 'AprovimiController@index');
    Route::post('/aprovim-update', 'AprovimiController@update');
    Route::get('/Administration','AdminstrationController@index');
    Route::get('/addUser','AdminstrationController@addUser');
    Route::get('/edit/{id}','AdminstrationController@edit');
    Route::post('/user/update/{id}','AdminstrationController@update');
    Route::post('/user/search','AdminstrationController@search')->name('search');
    Route::post('/Administration-store','AdminstrationController@store');
    Route::delete('/user/delete/{id}','AdminstrationController@destroy');

    Route::delete('/aprovim/delete/{id}','AprovimiController@destroy');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login/{social}','Auth\LoginController@socialLogin')
                    ->where('social','facebook|google');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')
    ->where('social','facebook|google');
