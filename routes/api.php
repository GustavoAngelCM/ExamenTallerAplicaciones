<?php

use Illuminate\Http\Request;


Route::resource('categorias', 'CategoriaController', ['except' => ['edit', 'create']]);
Route::get('catproduct', 'ExamenQueryController@ProductoPorCategoria');
Route::get('clientproduct/{cliente}', 'ExamenQueryController@ClientePorProducto');
Route::get('proveeproduct/{provee}', 'ExamenQueryController@ProveePorProducto');
Route::get('clientesciudades/', 'ExamenQueryController@ClientesPorCiudades');
Route::get('clientesciudadescantidad/', 'ExamenQueryController@ClientesPorCiudadesCantidad');
Route::get('productosmas/', 'ExamenQueryController@ProductosMas');
Route::get('categoriamas/', 'ExamenQueryController@CategoriaMas');
Route::get('ciudadmenosclientes/', 'ExamenQueryController@CiudadMenosClientes');
Route::get('ciudadcompras/', 'ExamenQueryController@CiudadCompras');
Route::get('clientecompra/', 'ExamenQueryController@ClienteCompra');
Route::get('stock/', 'ExamenQueryController@Stock');
