<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class AppController extends Controller
{
    function tela_login(){
        if (session()->has('login')) {
            return redirect()->route('index');
        }

    	return view('usuarios.login');
    }

    function index(){
        if (!session()->has('login')) {
            return redirect()->route('tela_login');
        }

    	return view('index');
    }

    function login(Request $req){
    	$login = $req->input('login');
    	$senha = $req->input('senha');

    	$usuario = Usuario::where('login', '=', $login)->first();

    	if ($usuario and $usuario->senha == $senha){
            $variavel = [
                "login" => $login,
                "nome" => $usuario->nome
            ];
            session($variavel);
            
    		return redirect()->route('index');
    	} else {
    		return view("resultado", ["mensagem" => "Usuário ou senha inválidos."]);
    	}
    }

    function logout(){
        session()->forget(["login", "nome"]);
        
        return redirect()->route('tela_login');
    }
}
