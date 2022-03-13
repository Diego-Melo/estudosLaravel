@extends('layouts.main')
@section('title', 'Adição de Veículos')
@section('content')
    <div class="container p-5">
        <div class="form-control p-4">
            <form action="/veiculo" method="POST">
                <h2>Adição de Veículos</h2>
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-8 col-xs-12">
                        <label for="nome_cliente" class="form-label">Nome do Cliente</label>
                        <input required type="text" class="form-control" id="nome_cliente" name="nome_cliente"
                            placeholder="Digite o nome do cliente.">
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <label for="fone_cliente" class="form-label">Telefone do Cliente</label>
                        <input required type="text" class="form-control" id="fone_cliente" name="fone_cliente"
                            placeholder="Digite o telefone do cliente.">
                    </div>
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
                    <div class="col-md-6 col-lg-3 col-xs-12">
                        <label for="placa" class="form-label">Placa</label>
                        <input required type="text" class="form-control" id="placa" name="placa"
                            placeholder="Digite a placa do veículo.">
                    </div>
                    <div class="col-md-6 col-lg-3 col-xs-12">
                        <label for="cor" class="form-label">Cor</label>
                        <input required type="text" class="form-control" id="cor" name="cor"
                            placeholder="Digite a cor do veículo.">
                    </div>
                    <div class="col-md-6 col-lg-3 col-xs-12">
                        <label for="marca" class="form-label">Marca</label>
                        <input required type="text" class="form-control" id="marca" name="marca"
                            placeholder="Digite a marca do veículo.">
                    </div>
                    <div class="col-md-6 col-lg-3 col-xs-12">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input required type="text" class="form-control" id="modelo" name="modelo"
                            placeholder="Digite o modelo do veículo.">
                    </div>

                    <div class="col-md-6 col-lg-3 col-xs-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="status" name="status">
                            <label class="form-check-label" for="status">Ativo</label>
                        </div>
                    </div>
                </div>
                <div class=" justify-content-end d-flex">
    <button class="btn btn-primary">Adicionar</button>

                </div>
                
        </div>


        </form>
    </div>
    </div>
@endsection
