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
Route::post('/', ['as'=>'store', 'uses' => 'formcontroller@store']);
Route::get('/', ['as'=>'index', 'uses' => 'formcontroller@index']);


Route::get('/', function () {
    return view('index');
});
Route::group(['middleware'=>'web'],function(){
Auth::routes();
Route::get('/home/delete/{id}',['as'=>'home.delete', 'uses' => 'HomeController@destroy']);
Route::post('/home/{id}',['as'=>'alterar', 'uses' => 'HomeController@alterarpag']);
Route::get('/home/edit/{id}',['as'=>'admin.edit', 'uses' => 'HomeController@edit']);
Route::post('/home/update/{id}',['as'=>'admin.update', 'uses' => 'HomeController@update']);
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/filtro',['as'=>'admin.filtrar', 'uses' => 'HomeController@filtrar']);
});

