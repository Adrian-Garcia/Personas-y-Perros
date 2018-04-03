<?php

//Cuando vaya a la ruta '/' ve a PersonasController Funcion index
Route::get('/', 'PersonasController@index');
Route::get('/mostrarPersona/{id}', 'PersonasController@show');
Route::post('/agregar', 'PersonasController@store');
Route::post('/update', 'PersonasController@update');
Route::post('/delete', 'PersonasController@destroy');
Route::get('/editar', 'PersonasController@edit');

Route::get('/perros', 'PerrosController@index');
Route::get('/mostrarPerro/{id}', 'PerrosController@show');
Route::post('/agregarPerro', 'PerrosController@store');
Route::post('/updatePerro', 'PerrosController@update');
Route::post('/deletePerro', 'PerrosController@destroy');
Route::get('/editarPerro', 'PerrosController@edit');