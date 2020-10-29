<?php

use App\Http\Controllers\DowntimeController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/master', 'HomeController@master')->name('master');
Route::get('/master/form', 'HomeController@form')->name('form');
Route::get('/master/mutasi', 'HomeController@mutasi')->name('mutasi');


Auth::routes();
Route::group(['middleware' => ['auth','checkRole:Admin']], function () {

    Route::get('/category', 'CategoryController@index');
    Route::post('/category/create', 'CategoryController@create');
    Route::get('/category/{id}/edit', 'CategoryController@edit');
    Route::post('/category/{id}/update', 'CategoryController@update');
    Route::delete('/category/{id}/delete', 'CategoryController@destroy');

    Route::get('/unit', 'UnitController@index');
    Route::post('/unit/create', 'UnitController@create');
    Route::get('/unit/{id}/edit', 'UnitController@edit');
    Route::post('/unit/{id}/update', 'UnitController@update');
    Route::delete('/unit/{id}/delete', 'UnitController@destroy');

    // Master Sparepart
    Route::get('/sparepart', 'SparepartController@index');
    Route::get('/sparepart/form', 'SparepartController@form');
    Route::post('/sparepart/create', 'SparepartController@create');
    Route::get('/sparepart/{id}/detail', 'SparepartController@show');
    Route::get('/sparepart/{id}/edit', 'SparepartController@edit');
    Route::post('/sparepart/{id}/update', 'SparepartController@update');
    Route::delete('/sparepart/{id}/delete', 'SparepartController@destroy');
    Route::get('/sparepart/alert', 'SparepartController@alert');

    Route::get('/income', 'IncomeController@index');
    Route::get('/income/form', 'IncomeController@form');
    Route::post('/income/create', 'IncomeController@create');
    Route::delete('/income/{id}/delete', 'IncomeController@destroy');
    Route::get('/income/{id}/edit', 'IncomeController@edit');
    Route::post('/income/{id}/update', 'IncomeController@update');

    Route::get('/outcome', 'OutcomeController@index');
    Route::get('/outcome/form', 'OutcomeController@form');
    Route::post('/outcome/create', 'OutcomeController@create');
    Route::delete('/outcome/{id}/delete', 'OutcomeController@destroy');
    Route::get('/outcome/{id}/edit', 'OutcomeController@edit');
    Route::post('/outcome/{id}/update', 'OutcomeController@update');
});

Route::group(['middleware' => 'auth', 'checkRole:Admin,Crew'], function () {

    // Master Position
    Route::get('/position', 'PositionController@index');
    Route::post('/position/create', 'PositionController@create');
    Route::get('/position/{id}/edit', 'PositionController@edit');
    Route::post('/position/{id}/update', 'PositionController@update');
    Route::delete('/position/{id}/delete', 'PositionController@destroy');

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
    Route::delete('/crew/{id}/delete', 'CrewController@destroy');

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
    Route::get('/report', 'DowntimeController@report');
    Route::get('/downtime/form', 'DowntimeController@form');
    Route::post('/downtime/create', 'DowntimeController@create');
    Route::get('/downtime/{id}/edit', 'DowntimeController@edit');
    Route::post('/downtime/{id}/update', 'DowntimeController@update');
    Route::delete('/downtime/{id}/delete', 'DowntimeController@destroy');
    Route::get('/downtime/{id}/show', 'DowntimeController@show');
});

