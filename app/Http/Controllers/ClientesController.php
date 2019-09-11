<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view ('clientes.index', compact('data'));
    }

    public function new(){
       
        return view('clientes.new');
    }

    public function store(Request $request, User $user){
        $request->validate([
            'name' => 'required',
            'endereco' => 'required',
            'email' => 'required|email',
            'numero' => 'required|numeric',
            'bairro' => 'required',
            'cep' => 'required|numeric',
            'tel_fixo' => 'required|numeric',
            'tel_cel' => 'required|numeric',
            ]);
     
        if (isset($request->id)){
            $user = User::find($request->id)->first();
            $user->id = $request->id;
            $user->name = $request->name;
            $user->endereco = $request->endereco;
            $user->email = $request->email;
            $user->numero = $request->numero;
            $user->bairro = $request->bairro;
            $user->cep = $request->cep;
            $user->tel_fixo = $request->tel_fixo;
            $user->tel_cel = $request->tel_cel;
       }else{
         $user->name = $request->name;
         $user->endereco = $request->endereco;
         $user->email = $request->email;
         $user->numero = $request->numero;
         $user->bairro = $request->bairro;
         $user->cep = $request->cep;
         $user->tel_fixo = $request->tel_fixo;
         $user->tel_cel = $request->tel_cel;
       }
         $user->save();
         if (isset($request->id)){
            return redirect()->route('clientes')->with('info','Dados atualizados com sucesso.');
         }else{
         return redirect()->route('clientes')->with('info','Dados inseridos com sucesso.');
         }
    }

    public function delete($id){
        User::find(base64_decode($id))->delete();
        return redirect()->route('clientes')->with('success','Dado excluido com sucesso.');
    }

    public function edit($id){
        $id = base64_decode($id);
        $dados = User::find($id)->first();
        return view('clientes.new', compact('dados'));
    }


}
