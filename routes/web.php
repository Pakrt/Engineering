<?php

use App\Http\Controllers\DowntimeController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/report', 'HomeController@report')->name('report');
Route::get('/master', 'HomeController@master')->name('master');

Auth::routes();
Route::group(['middleware' => ['auth','checkRole:Admin']], function () {
    // Master Position
    Route::get('/position', 'PositionController@index');
    Route::post('/position/create', 'PositionController@create');
    Route::get('/position/{id}/edit', 'PositionController@edit');
    Route::post('/position/{id}/update', 'PositionController@update');
    Route::delete('/position/{id}/delete', 'PositionController@destroy');
});

Route::group(['middleware' => 'auth', 'checkRole:Admin,Crew'], function () {

    Route::get('/user', 'UserController@index');
    Route::get('/user/{id}/detail', 'UserController@show');
    Route::post('/user/{id}/update', 'UserController@update');
    Route::get('/password', 'PasswordController@change');
    Route::put('/password/update', 'PasswordController@update');

    // Menu Crew Engineering
    Route::get('/crew', 'CrewController@index');
    Route::post('/crew/create', 'CrewController@create');
    Route::get('/crew/{id}/detail', 'CrewController@show');
    Route::get('/crew/{id}/edit', 'CrewController@edit');
    Route::post('/crew/{id}/update', 'CrewController@update');

    Route::get('/maintenance', function () {
        return view('maintenance.index');
    });
    // Ruang Gula
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
    Route::get('/filling/water', 'FillingController@water');
    Route::get('/filling/steam', 'FillingController@steam');

    // Maintenance Packaging
    Route::get('/packaging', 'PackagingController@index');
    Route::get('/packaging/pama', 'PackagingController@pama');
    Route::get('/packaging/pamb', 'PackagingController@pamb');
    Route::get('/packaging/pamc', 'PackagingController@pamc');
    Route::get('/packaging/pamd', 'PackagingController@pamd');
    Route::get('/packaging/karton', 'PackagingController@karton');
    Route::get('/packaging/konveyorpama', 'PackagingController@konveyorpama');
    Route::get('/packaging/konveyorpamb', 'PackagingController@konveyorpamb');
    Route::get('/packaging/konveyorpamc', 'PackagingController@konveyorpamc');
    Route::get('/packaging/konveyorpamd', 'PackagingController@konveyorpamd');
    Route::get('/packaging/jb1', 'PackagingController@jb1');
    Route::get('/packaging/jb2', 'PackagingController@jb2');

    // Master Component
    Route::get('/component', 'ComponentController@index');
    Route::post('/component/create', 'ComponentController@create');
    Route::get('/component/{id_komponen}/detail', 'ComponentController@show');
    Route::get('/component/{id}/edit', 'ComponentController@edit');
    Route::post('/component/{id}/update', 'ComponentController@update');
    Route::delete('/component/{id}/delete', 'ComponentController@destroy');

    // Master History
    Route::get('/history', 'HistoryController@index');
    Route::get('/history/form', 'HistoryController@form');
    Route::get('/history/{id_komponen}/detail', 'HistoryController@show');
    Route::get('/history/{id}/rinci', 'HistoryController@rinci');
    Route::post('/history/create', 'HistoryController@create');
    Route::get('/history/{id}/edit', 'HistoryController@edit');
    Route::post('/history/{id}/update', 'HistoryController@update');
    Route::delete('/history/{id}/delete', 'HistoryController@destroy');

    // Downtime
    Route::get('/downtime', 'DowntimeController@index');
    Route::get('/downtime/form', 'DowntimeController@form');
    Route::post('/downtime/create', 'DowntimeController@create');
    Route::get('/downtime/{id}/edit', 'DowntimeController@edit');
    Route::post('/downtime/{id}/update', 'DowntimeController@update');
    Route::delete('/downtime/{id}/delete', 'DowntimeController@destroy');
});

