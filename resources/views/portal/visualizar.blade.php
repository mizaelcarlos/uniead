@extends('layouts.app_nao_autenticado')

@section('content')
    <div class="container">
    <h1>informações da inscrição em teste seletivo</h1>
    <h3>Dados da inscrição</h3>
    <p>Inscrição: {{ $inscricao->inscricao }}</p>
    <p>Nome: {{ $inscricao->nome }}</p>
    <p>Email: {{ $inscricao->email }}</p>
    <p>Telefone: {{ $inscricao->telefone }}</p>
    <p>Colégio atual: {{ $inscricao->colegio_atual }}</p>
    <p>Série: {{ $inscricao->serie }}</p>
    <p>onde ficou sabendo: {{ $inscricao->onde_ficou_sabendo }}</p>

                      
    </div>
@endsection