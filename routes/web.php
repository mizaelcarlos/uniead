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

//portal admin
Route::get('admin/', ['as' => 'admin.inscricao.index' , 'uses' => 'admin\InscricaoController@index']);
Route::get('admin/inscricao/{id}', ['as' => 'admin.inscricao.show' , 'uses' => 'admin\InscricaoController@show']);
Route::get('admin/inscricao/editar/{id}', ['as' => 'admin.inscricao.edit' , 'uses' => 'admin\InscricaoController@edit']);
Route::put('admin/inscricao/atualizar', ['as' => 'admin.inscricao.update' , 'uses' => 'admin\InscricaoController@update']);
Route::delete('admin/inscricao/{id}', ['as' => 'admin.inscricao.destroy' , 'uses' => 'admin\InscricaoController@destroy']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
