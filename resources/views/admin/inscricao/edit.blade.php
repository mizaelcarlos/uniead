@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Alterar Inscrição</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ops!</strong> Foram encontrados alguns erros.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  
    <form action="{{ route('admin.inscricao.update',$inscricao->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
			<input type="hidden" name="id" id="id" value="{{ $inscricao->id }}" >
			
			<div class="form-group col-md-12" col-md-10" {{ $errors->has('nome') ? 'has-error' : ''}}">
				<label for="nome" class="control-label">{{ 'Nome *' }}</label>
				<input type="text" name="nome" id="nome" value="{{ $inscricao->nome }}" class="form-control" placeholder="Nome">
				{!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
			</div>
            <div class="form-group col-md-12" {{ $errors->has('email') ? 'has-error' : ''}}">
				<label for="email" class="control-label">{{ 'Email' }}</label>
				<input type="text" name="email" id="email" value="{{ $inscricao->email }}" class="form-control" placeholder="Email">
				{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
			</div>
            <div class="form-group col-md-3" {{ $errors->has('telefone') ? 'has-error' : ''}}">
				<label for="telefone" class="control-label">{{ 'Telefone *' }}</label>
				<input type="text" name="telefone" id="telefone" value="{{ $inscricao->telefone }}" class="form-control" placeholder="Telefone">
				{!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-3" {{ $errors->has('colegio_atual') ? 'has-error' : ''}}">
				<label for="colegio_atual" class="control-label">{{ 'Colégio Atual *' }}</label>
				<input type="text" name="colegio_atual" id="colegio_atual" value="{{ $inscricao->colegio_atual }}" class="form-control" placeholder="Colégio atual">
				{!! $errors->first('colegio_atual', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-3" {{ $errors->has('serie') ? 'has-error' : ''}}">
				<label for="serie" class="control-label">{{ 'Serie' }}</label>
				<input type="text" name="serie" id="serie" value="{{ $inscricao->serie }}" class="form-control" placeholder="Série">
				{!! $errors->first('serie', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-3" {{ $errors->has('onde_ficou_sabendo') ? 'has-error' : ''}}">
				<label for="onde_ficou_sabendo" class="control-label">{{ 'Onde ficou sabendo' }}</label>
				<input type="text" name="onde_ficou_sabendo" id="onde_ficou_sabendoonde_ficou_sabendo" value="{{ $inscricao->onde_ficou_sabendo }}" class="form-control" placeholder="Onde ficou sabendo">
				{!! $errors->first('onde_ficou_sabendo', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-3" {{ $errors->has('onde_ficou_sabendo') ? 'has-error' : ''}}">
				<button type="submit" class="btn btn-primary mb-3">
					Salvar
				</button>
			</div>
        </div>
            
           

    </form>
</div>
@endsection