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
    return view('welcome');
});

Route::get('/transport', 'TransportController@transportView')->name('transport');

Route::get('/transportViewSearch', 'TransportController@transportViewSearch')->name('transportViewSearch');

Route::post('/transportInsert', 'TransportController@transportInsert')->name('transportInsert');

//No importa que tengan el mismo nombre el route, lo que importa es el metodo y al controlador que haga.

Route::post('/transportViewSearch', 'TransportController@transportSearch')->name('transportSearch');

// Toma el id mandado desde el ' a href' para cogerlo como parametro ene lcontrolador 
Route::get('transportDelete/{id}', 'TransportController@transportDelete')->name('transportDelete');

//este route para llenar de datos el formulario de actualizar
Route::get('/transportUpdateForm/{id}', 'TransportController@transportUpdateForm')->name('transportUpdateForm');

Route::post('/transportUpdate', 'TransportController@transportUpdate')->name('transportUpdate');

