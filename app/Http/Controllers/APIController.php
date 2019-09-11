<?php

namespace App\Http\Controllers;
use App\User;
use App\ServicosModel;
use App\ProdutosModel;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getClientes(){

        $query = User::select('id','name', 'endereco');
        return datatables($query)
        ->addColumn('action', function($query){
                return '<a href="/clientes/edit/'.base64_encode($query->id).'" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>'.
                       '<a href="/clientes/delete/'.base64_encode($query->id).'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>';
        })
        ->make(true);
    }


    public function getServicos(){

        $query = ServicosModel::select('id','nome', 'valor');
        return datatables($query)
        ->addColumn('action', function($query){
                return '<a href="/servicos/edit/'.base64_encode($query->id).'" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>'.
                       '<a href="/servicos/delete/'.base64_encode($query->id).'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>';
        })
        ->make(true);
    }

    public function getProdutos(){

        $query = ProdutosModel::select('id','nome', 'descricao','qtde');
        return datatables($query)
        ->addColumn('action', function($query){
                return '<a href="/produtos/edit/'.base64_encode($query->id).'" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>'.
                       '<a href="/produtos/delete/'.base64_encode($query->id).'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>';
        })
        ->make(true);
    }


    public function getAjaxClientes(){
        $query = User::select('id','name','email','endereco')->get();
        return json_encode($query);
    }

    public function getAjaxServicos(){
        $query = ServicosModel::select('id','nome','tipo','valor')->get();
        return json_encode($query);
    }

    public function getAjaxProdutos(){
        $query = ProdutosModel::select('id','nome','descricao','qtde','valor')->get();
        return json_encode($query);
    }
     
}
