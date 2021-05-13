<?php

namespace App\Http\Controllers\formularios;
use App\Models\Inscricao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;

class InscricaoController extends Controller
{
    

    public function portal_inscrito()
    {
       return view('portal.index');
    }

    public function visualizar(Request $request)
    {
        $inscricao = $request->inscricao;
        $obj = Inscricao::where('inscricao', $inscricao)->first();
        return view('portal.visualizar', [
            'inscricao' => $obj			

        ]);
    }

    public function index()
    {
       return view('formularios/inscricao.index');
    }
    
	 public function nova(Request $request)
    {
	
        //Validação do Formulário
        $this->validaForm($request);


          //importante! - inicializa-se a transação
        DB::beginTransaction();
        try {
             
            $obj = new Inscricao();
            $obj->nome = $request->nome;
            $obj->inscricao = date('Ymdhis');
			$obj->email = $request->email;
            $obj->telefone = $request->telefone;
			$obj->colegio_atual = $request->colegio_atual;
			$obj->serie = $request->serie;
			$obj->onde_ficou_sabendo = $request->onde_ficou_sabendo;
            $obj->save();


        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);

        }

        DB::commit();
	
		$request->session()->flash('status', 'Inscrição realizada com sucesso! Número de inscrição para acompanhar: '.$obj->inscricao);
		
        return view('formularios/inscricao.index');
    }
	private  function validaForm(Request $request)
    {


        //início das validações
        $this->validate($request, [
			'nome'=> 'required',
            'email'=> 'required',
            'telefone'=> 'required',
            
            
            
        ]);
        //fim das validações
    }
}
