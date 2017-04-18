<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function salvar(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha1 = $request->input('senha1');
        $senha2 = $request->input('senha2');

        if($senha1 == $senha2){
            $usuario = new Usuario();
            $usuario->nome = $nome;
            $usuario->email = $email;
            $usuario->senha = $senha1;
            $usuario->save();

            return redirect(cadcliente/visualizar);
        }else{
            return 'Senhas nao conferem';
        }
    }

    public function visualizar()
    {
        $usuarios = Usuario::all();
        return view('viscliente')->with('usuarios', $usuarios);
    }
}
