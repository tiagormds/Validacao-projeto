<?php


Route::get('/novoCliente', ['as'=>'cliente.novo', 'uses'=>'ClienteControlador@create']);
Route::get('/', ['as'=>'index', 'uses'=>'ClienteControlador@index']);
Route::post('/salvarCliente', ['as'=>'salvar.cliente', 'uses'=>'ClienteControlador@store']);


