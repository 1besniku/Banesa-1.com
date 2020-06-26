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

Route::post('test-store', 'testController@store')->name('test_sotre');

Auth::routes();

Route::get('/','BallinaController@index');
Route::get('/about','DetajeController@about')->name('about');
Route::get('/test', 'testController@index');
Route::get('/contact', 'KontakController@index')->name('contact');
Route::get('/shtepia', 'ShpalljetController@shtepia')->name('shtepia');
Route::get('/lokalet', 'ShpalljetController@lokalet')->name('ballina');
Route::get('/banesa', 'ShpalljetController@banesa')->name('banesa');

Route::post('/contact-store', 'KontakController@store')->name('contact_store');


Route::post('/search/shpalljet', 'ShpalljetController@search')->name('search_shpalljet');
Route::get('/shpalljet' , 'ShpalljetController@index')->name('shpalljet');
Route::post('/pronat-store', 'PronatController@store')->name('pronat_store');
Route::get('/shtepia/{slug}', 'DetajeController@shtepi')->name('detajet');
Route::get('/ballinashow/{slug}', 'BallinaController@show')->name('ballina_show');
Route::get('/lokaletshow/{slug}', 'DetajeController@lokaletshow')->name('lokalet_show');
Route::get('/banesa/{slug}', 'DetajeController@banesa')->name('ballina_show');
Route::group(['middleware' => ['is_admin',]], function () {
    Route::get('/aprovim', 'AprovimiController@index')->name('aprovimi');
    Route::get('/message', 'KontakController@show')->name('message');
    Route::post('/aprovim-update', 'AprovimiController@update')->name('aprovimi_update');
    Route::get('/administrimi','AdminstrationController@index')->name('administrimi');
    Route::get('/addUser','AdminstrationController@addUser')->name('addUser');
    Route::get('/edit/{id}','AdminstrationController@edit')->name('editmi');
    Route::post('/user/update/{id}','AdminstrationController@update')->name('user_update');
    Route::post('/user/search','AdminstrationController@search')->name('user_search');
    Route::post('/Administration-store','AdminstrationController@store')->name('admistrimi_store');
    Route::delete('/user/delete/{id}','AdminstrationController@destroy')->name('user_delete');
    Route::delete('/aprovim/delete/{id}','AprovimiController@destroy')->name('aprovimi_delete');
});
Route::group(['middleware' => ['auth',]], function () {
    Route::get('/privatsia', 'AdminstrationController@simpleUser')->name('simpleUser');
    Route::get('/detaje/{id}', 'DetajeController@deatjet')->name('detajet');
    Route::post('/privatcy/update/{id}', 'AdminstrationController@update_privatcy')->name('update_privatcy');
    Route::get('/pronat', 'PronatController@index')->name('pronat');
    Route::get('/accont', 'LlogariaController@index')->name('accont');
    Route::delete('/llogaria/delete/{id}', 'LlogariaController@delete')->name('llogaria_delete');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login/{social}','Auth\LoginController@socialLogin')
                    ->where('social','facebook|google');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')
    ->where('social','facebook|google');
