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



Route::get('inscricao', ['as' => 'inscricao' , 'uses' => 'formularios\InscricaoController@Index']);
Route::post('inscricao/nova', ['as' => 'inscricao.nova' , 'uses' => 'formularios\InscricaoController@nova']);
Route::get('portal', ['as' => 'portal' , 'uses' => 'formularios\InscricaoController@portal_inscrito']);
Route::post('inscricao/visualizar', ['as' => 'inscricao.visualizar' , 'uses' => 'formularios\InscricaoController@visualizar']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
