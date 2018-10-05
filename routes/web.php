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

Route::get('/home', 'ProductosController@index');
Route::get('producto/create', 'ProductosController@create');
Route::get('producto/edit/{idproducto}', 'ProductosController@edit');
Route::post('producto/update/{idproducto}', 'ProductosController@update');
Route::post('producto/store', 'ProductosController@store');

Route::get('/mostrarrecetas', 'RecetaController@index');
Route::get('receta/create', 'RecetaController@create');
Route::get('receta/edit/{idreceta}', 'RecetaController@edit');
Route::post('receta/update/{idreceta}', 'RecetaController@update');
Route::post('receta/store', 'RecetaController@store');


Route::get('/mostrarmateria', 'MateriaController@index');
Route::get('materia/create', 'MateriaController@create');
Route::get('materia/edit/{idmateria}', 'MateriaController@edit');
Route::post('materia/update/{idmateria}', 'MateriaController@update');
Route::post('materia/store', 'MateriaController@store');

Route::get('/mostrarproduccion', 'ProduccionController@index');
Route::get('produccion/create', 'ProduccionController@create');
Route::get('produccion/edit/{idproduccion}', 'ProduccionController@edit');
Route::post('produccion/update/{idproduccion}', 'ProduccionController@update');
Route::post('produccion/store', 'ProduccionController@store');

Route::get('/mostrardetalle', 'DetalleController@index');
Route::get('detalle/create', 'DetalleController@create');
Route::post('detalle/store', 'DetalleController@store');


Route::get('/mostrarstock', 'StockController@index');
Route::get('stock/create', 'StockController@create');
Route::post('stock/store', 'StockController@store');
Route::get('stock/edit/{idstock}', 'StockController@edit');
Route::post('stock/update/{idstock}', 'StockController@update');

Route::get('/mostrarcliente', 'ClienteController@index');
Route::get('cliente/create', 'ClienteController@create');
Route::post('cliente/store', 'ClienteController@store');
Route::get('cliente/edit/{idcliente}', 'ClienteController@edit');
Route::post('cliente/update/{idcliente}', 'ClienteController@update');

Route::get('/mostrarventa', 'VentaController@index');
Route::get('venta/create', 'VentaController@create');
Route::post('venta/store', 'VentaController@store');

Route::get('/mostrarventasreportes', 'VentaController@ventasordenar');

Route::get('/mostrarprimareportes', 'MateriaController@reporteprima');

Route::get('/', function () {
    return view('welcome');
});
