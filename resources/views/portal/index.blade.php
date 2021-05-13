@extends('layouts.app_nao_autenticado')

@section('content')
<div class="container">

<h1>Inscrição em teste seletivo</h1>
							
	<p>Para fazer sua inscrição utilize o botão abaixo: </p>
	<a class="btn btn-info" href="{{ route('inscricao') }}">Inscrever-se</a>
	</br>
	</br>
	</br>
	<p>Utilize o formulário abaixo para consultar os dados da sua inscrição</p>
	
	
	<div class="row">
					

		<form method="POST" action="{{ url('/inscricao/visualizar') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
			{{ csrf_field() }}
				
			<div class="form-group col-md-12" col-md-10" {{ $errors->has('inscricao') ? 'has-error' : ''}}">
				<label for="inscricao" class="control-label">{{ 'Inscrição *' }}</label>
				<input class="form-control" name="inscricao" type="text" id="inscricao" placeholder="Insira seu inscricao" value="{{ isset($teste_seletivo->inscricao) ? $teste_seletivo->inscricao : ''}}" required>
				{!! $errors->first('inscricao', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-3" {{ $errors->has('inscricao') ? 'has-error' : ''}}">
				
				<button type="submit" class="btn btn-primary mb-3 ">
					Consultar
				</button>
			</div>
					
		</form>

	</div>

</div>
@endsection