@extends('layouts.main')
@section('title', 'Página de Testes')
@section('content')
    <h1>this is my content</h1>  
    {{var_dump($teste)}}
    {{-- @foreach($request->request as $req)
    {{$req}}
    @endforeach --}}

@endsection