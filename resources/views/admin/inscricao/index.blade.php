@extends('layouts.app')
 
@section('content')

    <div class="container">

       <h2>Lista de cursos</h2>
       
    
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
	@endif
	@if ($message = Session::get('delete'))
		<div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
		
    </div>    

<div class="container">
  
    <table class="table">
        <tr>
            <th>Inscrição</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
			<th>Opções</th>
        </tr>
        @foreach ($inscricoes as $inscricao)
        <tr>
            <td>{{ $inscricao->inscricao }}</td>
            <td>{{ $inscricao->nome }}</td>
            <td>{{ $inscricao->email }}</td>
			<td>{{ $inscricao->telefone }}</td>
            <td>
                <form id="form" action="{{ route('admin.inscricao.destroy',$inscricao->id) }}" method="POST" onsubmit = "return confirmDelete()">
   
                    <a class="btn btn btn-outline-primary" href="{{ route('admin.inscricao.show',$inscricao->id) }}">Visualizar</a>
    
                    <a class="btn btn-outline-success" href="{{ route('admin.inscricao.edit',$inscricao->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-outline-danger" onclick="confirmar()" >Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>


<script>

function confirmDelete() {
    return confirm('Deseja realmente excluir?');
}

</script>
     
@endsection