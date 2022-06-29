<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proprietario;

class ProprietarioController extends Controller
{
    public function listar(){
        $proprietarios = Proprietario::all();
        return $proprietarios;
    }

    public function create(Request $request){
        $proprietarios = new Proprietario();
        $proprietarios->nome = $request->nome;
        $proprietarios->cpf = $request->cpf;
        $proprietarios->telefone = $request->telefone;
        $proprietarios->email = $request->email;
        $status = $proprietarios->save();

        if($status){
            return response('Gravado com sucesso.', 201);
        }
        else{
            return 'Não gravou';
        }
    }
}
