@extends('layouts.app_nao_autenticado')

@section('content')
    <div class="container">
				<div class="row">
                        

                        <form method="POST" action="{{ url('/inscricao/nova') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('formularios.inscricao.form', ['formMode' => 'inscricao'])

                        </form>

                </div>
            </div>
        </div>
    </div>
@endsection