<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Cliente;

class VendaController extends Controller
{
    function telaCadastro() {
        if (!session()->has('login')) {
            return redirect()->route('tela_login');
        }

        $cliente = Cliente::all();
        return view('cadastrar_venda', [ "clientes" => $cliente]);
    }

    function telaAlterar($id) {
        if (!session()->has('login')) {
            return redirect()->route('tela_login');
        }

        $cliente = Cliente::all();
        $v = Venda::find($id);
        return view('alterar_vendas', [ "clientes" => $cliente, "venda" => $v]);
    }

    
    function telaListar() {        
        $lista = Venda::all();
        return view('listar_vendas', [ "vendas" => $lista]);
    }

    function telaListarVendasPorCliente($id){
        $cliente = Cliente::find($id);
        return view('listar_vendas', ["vendas" => $cliente->vendas, "cliente" => $cliente]);
    }

    function adicionar(Request $req) {
        $valor_total = $req->input("valor_total");
        $valor_total = str_replace('R$ ', '', str_replace(',','.', str_replace('.', '', $valor_total)));

        $v = new Venda();
        $v->id_cliente = $req->input("id_cliente");
        $v->descricao = $req->input("descricao");
        $v->valor_total = $valor_total;

        if ($v->save()) {
            $msg = "Venda para '" . $v->cliente->nome . "' adicionada com sucesso.";
        } else {
            $msg = "Venda não foi adicionada. Favor entrar em contato com o suporte.";
        }
        
        return view('resultado', [ "mensagem" => $msg]);
    }

    function alterar(Request $req, $id) {
        $valor_total = $req->input("valor_total");
        $valor_total = str_replace('R$ ', '', str_replace(',','.', str_replace('.', '', $valor_total)));

        $v = Venda::find($id);
        $v->id_cliente = $req->input("id_cliente");
        $v->descricao = $req->input("descricao");
        $v->valor_total = $valor_total;

        if ($v->save()) {
            $msg = "Venda #'$v->id' alterada com sucesso.";
        } else {
            $msg = "Venda não foi alterada. Favor entrar em contato com o suporte.";
        }
        
        return view('resultado', [ "mensagem" => $msg]);
    }


    function excluir($id) {
        if (!session()->has('login')) {
            return redirect()->route('tela_login');
        }
        
        $v = Venda::find($id);

        if ($v->delete()) {
            $msg = "Venda #'$v->id' excluída com sucesso.";
        } else {
            $msg = "Venda não foi excluída. Favor entrar em contato com o suporte.";
        }
        
        return view('resultado', [ "mensagem" => $msg]);
    }
}
