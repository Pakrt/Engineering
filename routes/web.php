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
Route::get('/user', 'UserController@index');

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

// Maintenance Mixing
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

// Maintenance Filling
Route::get('/filling', 'FillingController@index');
Route::get('/filling/gf1', 'FillingController@gf1');
Route::get('/filling/gf2', 'FillingController@gf2');
Route::get('/filling/gf3', 'FillingController@gf3');
Route::get('/filling/gf4', 'FillingController@gf4');
Route::get('/filling/gf5', 'FillingController@gf5');
Route::get('/filling/konveyorfilling', 'FillingController@konveyorfilling');
Route::get('/filling/transferpasteur', 'FillingController@transferpasteur');
Route::get('/filling/pasteur', 'FillingController@pasteur');
Route::get('/filling/transfercooling', 'FillingController@transfercooling');
Route::get('/filling/cooling1', 'FillingController@cooling1');
Route::get('/filling/cooling2', 'FillingController@cooling2');
Route::get('/filling/transferdrying', 'FillingController@transferdrying');
Route::get('/filling/drying1', 'FillingController@drying1');
Route::get('/filling/drying2', 'FillingController@drying2');
Route::get('/filling/transferpembagi', 'FillingController@transferpembagi');
Route::get('/filling/pembagi', 'FillingController@pembagi');


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

