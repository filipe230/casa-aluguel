<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Models\Proprietario;

class EnderecoController extends Controller
{
    public function listar(){
        $enderecos = Endereco::all();
        return $enderecos;
    }

    public function create(Request $request){
        $enderecos = new Endereco();
        $enderecos->nome = $request->nome;
        $enderecos->logradouro = $request->logradouro;
        $enderecos->bairro = $request->bairro;
        $enderecos->numero = $request->numero;
        $enderecos->cidade = $request->cidade;
        $enderecos->estado = $request->estado;
        $enderecos->proprietario_id = $request->proprietario_id;
        $status = $enderecos->save();

        if($status){
            return response('Endereco Gravado com sucesso.', 201);
        }
        else{
            return 'Não gravou o endereco';
        }
    }

    public function listarTudo(){
        $tudo = Proprietario::with('propCasas')->get();
        //$tudo = Controller::find(1);
        return $tudo;
        //$result = $this->context->with('statususers')->find($id);

    }

    
}
