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


//route::get('/login','HomeController@index');
//route::get('/logout','UserController@getSignOut');
//route::get('/verify','UserController@verifyUser');
Auth::routes();
Route::get('users/export/', 'UserController@export');
route::get('/pdf',function(){
    $dados = ['data'=>'09/08/2019','pedido'=>'1'];
    return \PDF::loadview('servicos.invoice',compact('dados') )->stream();
   //return view('servicos.invoice');
});

// Example Routes
Route::view('/', 'landing')->middleware('auth');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');

route::get('/clientes/index','ClientesController@index')->name('clientes');
route::get('/clientes/new','ClientesController@new')->name('clientes.novo');
route::post('/clientes/store','ClientesController@store')->name('clientes.store');
route::get('/clientes/delete/{id}','ClientesController@delete')->name('clientes.delete');
route::get('/clientes/edit/{id}','ClientesController@edit')->name('clientes.edit');

route::get('/servicos/index','ServicosController@index')->name('servicos');
route::get('/servicos/new','ServicosController@new')->name('servicos.novo');
route::post('/servicos/store','ServicosController@store')->name('servicos.store');
route::get('/servicos/delete/{id}','ServicosController@delete')->name('servicos.delete');
route::get('/servicos/edit/{id}','ServicosController@edit')->name('servicos.edit');

route::get('/produtos/index','ProdutosController@index')->name('produtos');
route::get('/produtos/new','ProdutosController@new')->name('produtos.novo');
route::post('/produtos/store','ProdutosController@store')->name('produtos.store');
route::get('/produtos/delete/{id}','ProdutosController@delete')->name('produtos.delete');
route::get('/produtos/edit/{id}','ProdutosController@edit')->name('produtos.edit');

route::get('/faturamento/index','FaturamentoController@index')->name('faturamento');


Route::get('/home', 'HomeController@index')->name('home');

