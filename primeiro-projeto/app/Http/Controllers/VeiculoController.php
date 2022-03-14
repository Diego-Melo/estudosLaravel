<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Veiculos;

class VeiculoController extends Controller
{
    public function index(){
        return view('home');
    }

    public function createView(){
        return view('veiculo.create');
    }

    public function edit($id){
        $veiculo = Veiculos::findOrFail($id);
        return view('veiculo.create',['veiculo'=>$veiculo]);
    }

    public function show(){
        $search = request('search');
        if($search){
            $veiculo = Veiculos::where([
                ['nome_cliente', 'like','%'.$search.'%']
            ]
            )->get();
        }else{
            $veiculo = Veiculos::all();
        }
        return view('veiculo.list',['veiculos'=>$veiculo,'search'=>$search]);
    }

    public function update(Request $request){
        $data = $request->all();
        $data['status'] = isset($data['status']) ? 'ativo' : 'inativo';
        Veiculos::findOrFail($request->id)->update($data);
        return redirect('veiculo')->with('msg','Veículo editado com sucesso!');
    }
    
    public function destroy($id){
        Veiculos::destroy($id);
        return redirect('veiculo')->with('msg','Veículo excluido com sucesso!');

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
        $status = isset($request->status) ? 'ativo' : 'inativo';
        $veiculos->status = $status;
        $veiculos->save();
        return redirect('veiculo')->with('msg','Veículo adicionado com sucesso!');
    }

    public function layout() {
        return view('layouts.main');
    }
}
