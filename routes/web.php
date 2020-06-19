<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/maintenance', function () {
    return view('maintenance.index');
});

// Menu Ruang Gula
Route::get('/sugar', 'SugarController@index');
Route::get('/sugar/desinfektan', 'SugarController@desinfektan');
Route::get('/sugar/hotwater', 'SugarController@hotwater');
Route::get('/sugar/syrup', 'SugarController@syrup');
Route::get('/sugar/steam', 'SugarController@steam');
Route::get('/sugar/water', 'SugarController@water');

// Menu Mixing
Route::get('/mixing', 'MixingController@index');
Route::get('/mixing/the', 'MixingController@the');
Route::get('/mixing/ndc', 'MixingController@ndc');
Route::get('/mixing/powder1', 'MixingController@powder1');
Route::get('/mixing/powder2', 'MixingController@powder2');
Route::get('/mixing/acid', 'MixingController@acid');
Route::get('/mixing/supply', 'MixingController@supply');
Route::get('/mixing/mixing1', 'MixingController@mixing1');
Route::get('/mixing/mixing2', 'MixingController@mixing2');
Route::get('/mixing/mixing3', 'MixingController@mixing3');
Route::get('/mixing/mixing4', 'MixingController@mixing4');
Route::get('/mixing/mixing5', 'MixingController@mixing5');

Route::get('/filling', function () {
    return view('maintenance.filling.index');
});
Route::get('/packaging', function () {
    return view('maintenance.packaging.index');
});
Route::get('/position', 'PositionController@index');
Route::post('/position/create', 'PositionController@create');
Route::get('/position/{id}/edit', 'PositionController@edit');
Route::post('/position/{id}/update', 'PositionController@update');
Route::delete('/position/{id}/delete', 'PositionController@destroy');

Route::get('/component', 'ComponentController@index');
Route::post('/component/create', 'ComponentController@create');
Route::get('/component/{id_komponen}/detail', 'ComponentController@show');
Route::get('/component/{id}/edit', 'ComponentController@edit');
Route::post('/component/{id}/update', 'ComponentController@update');
Route::delete('/component/{id}/delete', 'ComponentController@destroy');

Route::get('/history', 'HistoryController@index');
Route::get('/history/{id_komponen}/detail', 'HistoryController@show');
Route::post('/history/create', 'HistoryController@create');
Route::get('/history/{id}/edit', 'HistoryController@edit');
Route::post('/history/{id}/update', 'HistoryController@update');
Route::delete('/history/{id}/delete', 'HistoryController@destroy');

