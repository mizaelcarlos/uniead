@extends('layouts.app_nao_autenticado')

@section('content')
    <div class="container">
	<h1>Consulta de inscrição em teste seletivo</h1>
    <p>Utilize o formulário abaixo para consultar os dados da sua inscrição</p>
    			<div class="row">
                                 @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/inscricao/visualizar') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="card-body bg-white">

                                <div class="row flex-auto">
                                    <div class="form-group col-md-12" col-md-10" {{ $errors->has('inscricao') ? 'has-error' : ''}}">
                                        <label for="inscricao" class="control-label">{{ 'Inscrição *' }}</label>
                                        <input class="form-control" name="inscricao" type="text" id="inscricao" placeholder="Insira seu inscricao" value="{{ isset($teste_seletivo->inscricao) ? $teste_seletivo->inscricao : ''}}" required>
                                        {!! $errors->first('inscricao', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <div class="form-group col-md-3" {{ $errors->has('onde_ficou_sabendo') ? 'has-error' : ''}}">
                                        <button type="submit" class="btn btn-primary mb-3">
                                            Consultar
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>

                        </form>

                </div>
            </div>
        </div>
    </div>
@endsection