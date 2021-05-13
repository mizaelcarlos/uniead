<?php

namespace App\Http\Controllers\admin;
use App\Models\Inscricao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;

class InscricaoController extends Controller
{
	use AuthenticatesUsers;


    public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
        
        $inscricoes = Inscricao::all();

            return view('admin.inscricao.index', [
                'inscricoes' => $inscricoes
                
    
            ]);
    }
    
    public function show($id)
    {
        
        $inscricao = Inscricao::find($id);
        return view('admin.inscricao.show', [
            'inscricao' => $inscricao			

        ]);
    }

    
    public function edit($id)
    {
        
        $inscricao = Inscricao::find($id);
        return view('admin.inscricao.edit', [
            'inscricao' => $inscricao		

        ]);
    }

    
    public function update(Request $request)
    {
        
        $inscricao = DB::table('inscricao')
              ->where('id', $request->id)
              ->update(['nome' => $request->nome, 'email' => $request->email, 'telefone' => $request->telefone, 'colegio_atual' => $request->colegio_atual, 'serie' => $request->serie, 'onde_ficou_sabendo' => $request->onde_ficou_sabendo]);
    

  
        return redirect()->route('admin.inscricao.index')
                        ->with('success','Inscrição alterada com sucesso');
    }

    
    public function destroy($id)
    {
        
        $inscricao = Inscricao::find($id);
        $inscricao->delete();
  
        return redirect()->route('admin.inscricao.index')
                        ->with('delete','Inscrição removida com sucesso');
    }
}
