@extends('layouts.main')
@section('title', 'Listagem de Veículos')
@section('content')

    <div class="container-fluid">

        <div class="container p-5">
            <div class="container-fluid d-flex justify-content-end align-items-center">
                
                    <a href="veiculo/create" class="btn btn-primary btn-sm d-flex justify-content-center align-items-center" >
                        <span class="material-icons fs-2" style="color: #ffffff">add</span>
                        Adicionar Veículo
                    </a>
            </div>
            <div class="row">
@if($search)
                <h1>Buscando por: {{$search}}</h1>
                @if(count($veiculos)==0)
                <h5>Nenhum resultado encontrado para busca.</h5>
                <a href="/veiculo">Clique aqui para voltar.</a>

@endif
@endif
                @foreach ($veiculos as $veiculo)
                <div class="col-lg-6 col-sm-12">
                    <div class="card p-2 mb-1">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-between flex-column align-items-start">
                                <div>
                                    <h5>
                                        {{ strtoupper($veiculo->placa) }}
                                    </h5>
                                    {{ $veiculo->nome_cliente }}
                                </div>
                                <span>
                                    {{ $veiculo->fone_cliente }}
                                </span>
                            </div>
                            <div class="col-4 d-flex justify-content-center flex-column align-items-center">
                                <span>

                                    {{ ucwords($veiculo->modelo) }}
                                </span>
                                <span>
                                    {{ $veiculo->marca }}
                                </span>
                                <span>
                                    {{ $veiculo->cor }}
                                </span>

                            </div>
                            <div class="col-4 d-flex justify-content-end align-items-start">
                                <div class="d-flex justify-content-center align-items-end flex-column">
                                    <span style="color: grey; font-size: 0.7em">Data de Criação</span>
                                    {{ $veiculo->created_at->format('d/m/Y') }}
                                    <div class="d-flex">


                                        <a href="/veiculo/edit/{{$veiculo->id}}" class="p-1" style="background: none; border:none">
                                            <span class="material-icons" style="color: #2196f3">edit</span>
                                        </a>

                                    <form action="/veiculo/{{$veiculo->id}}" method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-1" style="background: none; border:none">
                                            <span class="material-icons" style="color: #f55">delete</span>
                                        </button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div> 
                        <br>
                        @if($veiculo->status=="ativo")
  <div class="card-footer bg-transparent border-success" ></div>
  @else 
  <div class="card-footer bg-transparent border-danger" ></div>
  @endif
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="position-fixed bottom-0 end-0 p-3 " style="z-index: 11">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body bg-success rounded ">
                <div class="d-flex justify-content-between">
                    <p class="text-white ">
                        {{ session('msg') }}
                    </p>
                    <button type="button" class="btn-close " data-bs-dismiss="toast" aria-label="Close"></button>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('final')

    @if (!empty(session('msg')))
        <script>
            $(document).ready(function() {
                $('.toast').toast('show');
            });
        </script>
    @endif
@endsection
