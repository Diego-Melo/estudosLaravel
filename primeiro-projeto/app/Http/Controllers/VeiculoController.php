<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Veiculos;

class VeiculoController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function createView(){
        return view('veiculo.create');
    }

    public function edit(){
    }

    public function show(){
        $veiculos = Veiculos::all();
        return view('veiculo.list',['veiculos'=>$veiculos]);
    }

    public function delete(){
    }

    public function store(Request $request){
        $veiculos = new Veiculos();
        $veiculos->nome_cliente = $request->nome_cliente;
        $veiculos->fone_cliente = $request->fone_cliente;
        $veiculos->senha = md5($request->senha);
        $veiculos->contra_senha = md5($request->contra_senha);
        $veiculos->placa = $request->placa;
        $veiculos->modelo = $request->modelo;
        $veiculos->cor = $request->cor;
        $veiculos->marca = $request->marca;
        $status = $request->status;
        $veiculos->status = $status == 'on' ? 'ativo' : 'inativo';
        $veiculos->save();
        return redirect('veiculo')->with('msg','Veículo adicionado com sucesso!');
    }
}
