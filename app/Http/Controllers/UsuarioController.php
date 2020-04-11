<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    function telaCadastro(){
        if (!session()->has('login')) {
            return redirect()->route('tela_login');
        }

    	return view("usuarios.cadastrar");
    }

    function telaAlteracao($id){
        if (!session()->has('login')) {
            return redirect()->route('tela_login');
        }
        
        $usuario = Usuario::find($id);

        return view("usuarios.alterar", [ "usuario" => $usuario ]);
    }

    function telaListar() {
        $usuarios = Usuario::all();
        return view("usuarios.listar", [ "us" => $usuarios ]);
    }

    function adicionar(Request $req){
    	$usuario = new Usuario();
    	$usuario->nome = $req->input('nome');
    	$usuario->login = $req->input('login');
    	$usuario->senha = $req->input('senha');

    	if ($usuario->save()){
    		$msg = "Usuário $usuario->nome adicionado com sucesso.";
    	} else {
    		$msg = "Usuário não foi cadastrado.";
    	}

        return view("resultado", [ "mensagem" => $msg]);
    }

    function alterar(Request $req, $id){
        $usuario = Usuario::find($id);

    	$usuario->nome = $req->input('nome');
    	$usuario->login = $req->input('login');
    	$usuario->senha = $req->input('senha');

        if ($usuario->save()){
            $msg = "Usuário $usuario->nome alterado com sucesso.";
        } else {
            $msg = "Usuário não foi alterado.";
        }

        return view("resultado", [ "mensagem" => $msg]);
    }

    function excluir($id){
        if (!session()->has('login')) {
            return redirect()->route('tela_login');
        }
        
        $usuario = Usuario::find($id);

        if ($usuario->delete()){
            $msg = "Usuário $id excluído com sucesso.";
        } else {
            $msg = "Usuário não foi excluído.";
        }

        return view("resultado", [ "mensagem" => $msg]);
    }
}
