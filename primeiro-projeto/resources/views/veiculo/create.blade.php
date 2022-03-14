@extends('layouts.main')
@section('content')
    <div class="container p-5">
        <div class="form-control p-4">
            @php
                function getDefault($value, $default = '')
                {
                    return isset($value) ? $value : $default;
                }
            @endphp

@if (isset($veiculo))
<form action="/veiculo/update" method="POST">
    @method('PUT')
                    @section('title', 'Edição de Veículos')
                    <h2>Edição de Veículos</h2>
                    <input type="hidden" name="id" value="{{$veiculo->id}}">
                @else
                    <form action="/veiculo" method="POST">
                    @section('title', 'Adição de Veículos')
                    <h2>Adição de Veículos</h2>
                    @endif
                    @csrf
        <div class="row">
            <div class="col-md-6 col-lg-8 col-xs-12">
                <label for="nome_cliente" class="form-label">Nome do Cliente</label>
                <input required type="text" class="form-control" id="nome_cliente" name="nome_cliente"
                    placeholder="Digite o nome do cliente."
                    value="{{ isset($veiculo) ? $veiculo->nome_cliente : '' }}">
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <label for="fone_cliente" class="form-label">Telefone do Cliente</label>
                <input value="{{ isset($veiculo) ? $veiculo->fone_cliente : '' }}" required type="text"
                    class="form-control" id="fone_cliente" name="fone_cliente"
                    placeholder="Digite o telefone do cliente.">
            </div>

            @if (!isset($veiculo))
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <label for="senha" class="form-label">Senha</label>
                    <input required type="text" class="form-control" id="senha" name="senha"
                        placeholder="Digite a senha.">
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <label for="contra_senha" class="form-label">Contrassenha</label>
                    <input required type="text" class="form-control" id="contra_senha" name="contra_senha"
                        placeholder="Digite a contrassenha.">
                </div>
            @endif
            <div class="col-md-6 col-lg-3 col-xs-12">
                <label for="placa" class="form-label">Placa</label>
                <input value="{{ isset($veiculo) ? $veiculo->placa : '' }}" required type="text"
                    class="form-control" id="placa" name="placa" placeholder="Digite a placa do veículo.">
            </div>
            <div class="col-md-6 col-lg-3 col-xs-12">
                <label for="cor" class="form-label">Cor</label>
                <input value="{{ isset($veiculo) ? $veiculo->cor : '' }}" required type="text" class="form-control"
                    id="cor" name="cor" placeholder="Digite a cor do veículo.">
            </div>
            <div class="col-md-6 col-lg-3 col-xs-12">
                <label for="marca" class="form-label">Marca</label>
                <input value="{{ isset($veiculo) ? $veiculo->marca : '' }}" required type="text"
                    class="form-control" id="marca" name="marca" placeholder="Digite a marca do veículo.">
            </div>
            <div class="col-md-6 col-lg-3 col-xs-12">
                <label for="modelo" class="form-label">Modelo</label>
                <input value="{{ isset($veiculo) ? $veiculo->modelo : '' }}" required type="text"
                    class="form-control" id="modelo" name="modelo" placeholder="Digite o modelo do veículo.">
            </div>

            <div class="col-md-6 col-lg-3 col-xs-12">
                <div class="form-check form-switch">
                    @if (isset($veiculo) && $veiculo->status == 'ativo')
                        <input class="form-check-input" type="checkbox" id="status" name="status" checked>
                    @else
                        <input class="form-check-input" type="checkbox" id="status" value="off" name="status">
                        <label class="form-check-label" for="status">Ativo</label>
                    @endif
                </div>
            </div>
        </div>
        <div class=" justify-content-end d-flex">
            <button class="btn btn-primary">{{ isset($veiculo) ? 'Editar' : 'Adicionar' }}</button>

        </div>



        </form>
    </div>
</div>
@endsection
