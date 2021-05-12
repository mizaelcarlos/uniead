@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Inscrição </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Inscrição</th><td>{{ $inscricao->inscricao }}</td>
                                    </tr>
                                    <tr><th> Nome </th><td> {{ $inscricao->nome }} </td></tr>
									<tr><th> Email</th><td> {{ $inscricao->email }} </td></tr>
									<tr><th> Telefone </th><td> {{ $inscricao->telefone }} </td></tr>
									<tr><th> Colégio atual</th><td> {{ $inscricao->colegio_atual }} </td></tr>
									<tr><th> Serie</th><td> {{ $inscricao->serie }} </td></tr>
									<tr><th> Onde ficou sabendo </th><td> {{ $inscricao->onde_ficou_sabendo }} </td></tr>
									
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
