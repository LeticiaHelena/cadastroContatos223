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

    //DELETE: remove o registro no banco de dados
    public function delete($id)
    {
        //Busca o contato pelo id
        $contato = Contato::find($id);

        if($contato){
            //Executa o comando de exclusão no banco
            $contato->delete();
        }

        return redirect('/'); //retorna a home
    }

    public function edit($id)
    {
        //Busca o contato pelo id
        $contato = Contato::find($id);

        //Abre a view de edição com o registro buscado
        return view('edit', ['contato' => $contato]);
    }

    public function update(Request $request, $id)
    {
        //Busca o contato pelo id
        $contato = Contato::find($id);
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->endereco = $request->input('endereco');
        $contato->save();

        return redirect('/');
    }
    
}
