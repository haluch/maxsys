<?php

use Illuminate\Http\Request;
use App\TesteModel;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


route::get('api/v1/clientes', 'APIController@getClientes')->name('api.clientes.index'); // Datatables
route::get('api/v1/servicos', 'APIController@getServicos')->name('api.servicos.index'); // Datatables
route::get('api/v1/produtos', 'APIController@getProdutos')->name('api.produtos.index'); // Datatables
route::get('api/v1/ajax_clientes', 'APIController@getAjaxClientes')->name('api.ajax.clientes'); 
route::get('api/v1/ajax_servicos', 'APIController@getAjaxServicos')->name('api.ajax.servicos');
route::get('api/v1/ajax_produtos', 'APIController@getAjaxProdutos')->name('api.ajax.produtos');