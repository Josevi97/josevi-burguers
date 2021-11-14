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

Route::post('/add_producto/{id}', 'CarritoController@add_producto');
Route::post('/limpiar_carrito', 'CarritoController@limpiar_carrito');
Route::post('/eliminar_producto/{id}', 'CarritoController@eliminar_producto');

Route::get('/comprar_productos', 'CarritoController@comprar_productos');
Route::get('/carrito', 'CarritoController@index');

Route::get('/', 'ProductoController@index');
Route::get('/{id}', 'ProductoController@producto');
