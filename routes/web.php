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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('canals', 'CanalController@index')->name('canalI');
Route::get('crearCanal', 'CanalController@create')->name('canalCreate');
Route::get('desarCanal', 'CanalController@store')->name('canalStore');
Route::get('edit', 'CanalController@edit')->name('canalEdit');
Route::get('update', 'CanalController@update')->name('canalUpdate');
Route::get('programa', 'ProgramaController@index')->name('programaI');
Route::get('crearPrograma', 'ProgramaController@create')->name('programaCreate');
Route::get('desarPrograma', 'ProgramaController@store')->name('programaStore');
Route::get('graella', 'GraellaController@index')->name('graellaI');
Route::get('crearGraella', 'GraellaController@create')->name('graellaCreate');
Route::get('desarGraella', 'GraellaController@store')->name('graellaStore');


