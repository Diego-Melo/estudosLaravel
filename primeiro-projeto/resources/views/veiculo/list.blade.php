@extends('layouts.main')
@section('title', 'Listagem de Veículos')
@section('content')
    @foreach($veiculos as $veiculo)
        {{$veiculo->nome_cliente}}
    @endforeach



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

@if(!empty(session('msg')))
    <script>
        $(document).ready(function() {
            $('.toast').toast('show');
        });
    </script>
@endif
@endsection
