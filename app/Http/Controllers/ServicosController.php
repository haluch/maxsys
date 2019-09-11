<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicosModel;
use Illuminate\Support\Facades\Auth;

class ServicosController extends Controller
{
    public function __construct()
    { 
        $this->middleware(function ($request, $next) {
            $this->admin =  auth::user()->is_admin;
            return $next($request);
        });
    }
    
    public function index(){
       
        $data = ServicosModel::all();
        return view ('servicos.index',compact('data'));
    }

    public function new(){
        return view ('servicos.new');
    
    }

    public function store(REQUEST $request, ServicosModel $servicosModel){
        $request->validate([
            'nome' => 'required',
            'tipo' => 'required',
            'valor' => 'required',
            ]);

            if (isset($request->id)){ // Update
                $servicosModel = ServicosModel::find($request->id)->first();
                $valor = str_replace(',','.',$request->valor);
                $servicosModel->id = $request->id;
                $servicosModel->nome = $request->nome;
                $servicosModel->tipo = $request->tipo;
                $servicosModel->valor = $valor;
                $servicosModel->save();
                return redirect()->route('servicos')->with('info','Registro atualizado com sucesso.');
                
            }else { // Insert
                $valor = str_replace(',','.',$request->valor);
                $servicosModel->nome = $request->nome;
                $servicosModel->tipo = $request->tipo;
                $servicosModel->valor = $valor;
                $servicosModel->save();
                return redirect()->route('servicos')->with('info','Registro inserido com sucesso.');
            }
    }

    public function delete($id){
        ServicosModel::find(base64_decode($id))->delete();
        return redirect()->route('servicos')->with('success','Registro excluido com sucesso.');
    }

    public function edit($id){
        $id = base64_decode($id);
        $dados = ServicosModel::find($id)->first();
        return view('servicos.new', compact('dados'));
    }
}
