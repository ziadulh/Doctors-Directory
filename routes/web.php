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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminpanel','adminPanelController@list');
Route::get('adminpanel/{id}/editadminpaneluser','adminPanelController@edit');
Route::post('adminpanel/{id}/update', 'adminPanelController@update');
Route::post('adminpanel/{id}/delete', 'adminPanelController@destroy');
Route::get('/registerdoctor','registerDoctor@form');
Route::post('/registerdoctor/successful','registerDoctor@store');
Route::get('/doctors/list','registerDoctor@list');
Route::get('/doctors/list/{id}','registerDoctor@show');
Route::get('/doctors/list/{id}/edit','registerDoctor@edit');
Route::post('/doctors/list/{id}/update','registerDoctor@update');
Route::post('/doctors/list/{id}/delete','registerDoctor@destroy');