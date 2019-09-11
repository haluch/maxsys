<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutosModel;

class ProdutosController extends Controller
{
    public function index(){
        return view ('produtos.index');
    }

    public function new(){
        return view('produtos.new');
    }
    
    public function store(request $request, ProdutosModel  $produtos){
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'qtde' => 'required|numeric',
            'ncm' => 'numeric',
        ]);
        $valor = str_replace(',','.',$request->valor);
        if (isset($request->id)){
           // dd('1');
            $produtos = ProdutosModel::find($request->id)->first();
            $produtos->id = $request->id;
            $valor = str_replace(',','.',$request->valor);
            $produtos->nome = $request->nome;
            $produtos->descricao = $request->descricao;
            $produtos->valor = $valor;
            $produtos->qtde = $request->qtde;
            $produtos->ncm = $request->ncm;
            $produtos->obs = $request->obs;
            $produtos->save();
            return redirect()->route('produtos')->with('info','Registro atualizado com sucesso.');
        }else{
            //dd('2');
            $produtos->nome = $request->nome;
            $produtos->descricao = $request->descricao;
            $produtos->qtde = $request->qtde;
            $produtos->ncm = $request->ncm;
            $produtos->valor = $valor;
            $produtos->obs = $request->obs;
            $produtos->save();
            return redirect()->route('produtos')->with('info','Registro atualizado com sucesso.');
        }

    }

    public function edit($id){
        $dados = ProdutosModel::find(base64_decode($id))->first();
        return view('produtos.new',compact('dados'));
    }

    public function delete($id){
        $dados =ProdutosModel::find(base64_decode($id))->delete();
        return redirect()->route('produtos')->with('info','Registro excluido com sucesso.');
    }




}
