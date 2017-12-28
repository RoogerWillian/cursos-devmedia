<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = \App\Cliente::paginate(10);

        return view('cliente.index', compact('clientes'));
    }

    public function detalhe($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.detalhe', compact('cliente'));
    }

    public function adicionar()
    {
        return view('cliente.adicionar');
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            \Session::flash('flash_message', [
                'msg' => 'Cliente não encontrado! Deseja cadastrar um novo cliente ?',
                'class' => 'alert-danger'
            ]);

            return redirect()->route('cliente.adicionar');
        }

        return view('cliente.editar', compact('cliente'));
    }

    public function atualizar(ClienteRequest $request, $id)
    {
        Cliente::find($id)->update($request->all());

        \Session::flash('flash_message', [
            'msg' => 'Cliente atualizado com sucesso',
            'class' => 'alert-success'
        ]);

        return redirect()->route('cliente.index');
    }

    public function deletar($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente->removerTelefones()) {
            \Session::flash('flash_message', [
                'msg' => 'Cliente não pode ser deletado!',
                'class' => 'alert-danger'
            ]);

            return redirect()->route('cliente.index');
        }

        $cliente->delete();

        \Session::flash('flash_message', [
            'msg' => 'Cliente removido com sucesso',
            'class' => 'alert-success'
        ]);

        return redirect()->route('cliente.index');
    }

    public function salvar(ClienteRequest $request)
    {
        \App\Cliente::create($request->all());

        \Session::flash('flash_message', [
            'msg' => 'Cliente adicionado com Sucesso!',
            'class' => 'alert-success'
        ]);

        return redirect()->route('cliente.adicionar');
    }
}
