<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    //GET
    public function index()
    {
        //Model pega os dados do banco e traz
        $contatos = Contato::all();

        //Retorna os dados em formato JSON (para teste)
        //return response()->json($contatos);

        //Envia valores para a view
        return view('contatos', ['contatos' => $contatos]);
    }

    //POST
    public function form(Request $request)
    {
        $contato = new Contato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->endereco = $request->input('endereco');
        
        $contato->save(); //salva no banco de dados

        return redirect('/'); //redireciona a home
    }
    
}
