
<div class="container">
	<h2>Inscrição em teste seletivo</h2>
	
</div>

@if(session()->has('status'))
   <div class="alert alert-primary" role="alert">   
        <p>{{session()->get('status')}}</p>
    </div>
@endif


<div class="card-body bg-white">

        <div class="row flex-auto">
			<div class="form-group col-md-12" col-md-10" {{ $errors->has('nome') ? 'has-error' : ''}}">
				<label for="nome" class="control-label">{{ 'Nome *' }}</label>
				<input class="form-control" name="nome" type="text" id="nome" placeholder="Insira seu nome" value="{{ isset($teste_seletivo->nome) ? $teste_seletivo->nome : ''}}" required>
				{!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-12" {{ $errors->has('email') ? 'has-error' : ''}}">
				<label for="email" class="control-label">{{ 'Email *' }}</label>
				<input class="form-control" name="email" type="text" id="email" placeholder="Insira seu email" value="{{ isset($teste_seletivo->email) ? $teste_seletivo->email : ''}}" required>
				{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
			</div>
            <div class="form-group col-md-3" {{ $errors->has('telefone') ? 'has-error' : ''}}">
				<label for="telefone" class="control-label">{{ 'Telefone *' }}</label>
				<input class="form-control" name="telefone" type="tel" id="telefone" placeholder="Insira seu telefone" value="{{ isset($teste_seletivo->telefone) ? $teste_seletivo->telefone : ''}}" required>
				{!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-3" {{ $errors->has('colegio_atual') ? 'has-error' : ''}}">
				<label for="colegio_atual" class="control-label">{{ 'Colégio Atual *' }}</label>
				<input class="form-control" name="colegio_atual" type="text" id="colegio_atual" placeholder="" value="{{ isset($teste_seletivo->colegio_atual) ? $teste_seletivo->colegio_atual : ''}}" required>
				{!! $errors->first('colegio_atual', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-3" {{ $errors->has('serie') ? 'has-error' : ''}}">
				<label for="serie" class="control-label">{{ 'Serie' }}</label>
				<input class="form-control" name="serie" type="text" id="serie" value="{{ isset($teste_seletivo->serie) ? $teste_seletivo->serie : ''}}">
				{!! $errors->first('serie', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-3" {{ $errors->has('onde_ficou_sabendo') ? 'has-error' : ''}}">
				<label for="onde_ficou_sabendo" class="control-label">{{ 'Onde ficou sabendo' }}</label>
				<input class="form-control" name="onde_ficou_sabendo" type="text" id="onde_ficou_sabendo" value="{{ isset($teste_seletivo->onde_ficou_sabendo) ? $teste_seletivo->onde_ficou_sabendo : ''}}" >
				{!! $errors->first('onde_ficou_sabendo', '<p class="help-block">:message</p>') !!}
			</div>
			<div class="form-group col-md-3" {{ $errors->has('onde_ficou_sabendo') ? 'has-error' : ''}}">
				<button type="submit" class="btn btn-primary mb-3">
					Salvar
				</button>
			</div>
			
		</div>
</div>

<script>
		
	$(document).ready(function () {
	$("#telefone").inputmask("(99)99999-9999");
	});	
</script>