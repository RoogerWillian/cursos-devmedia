<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\TelefoneRequest;
use App\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adicionar($id)
    {
        $cliente = Cliente::find($id);

        return view('telefone.adicionar', compact('cliente'));
    }

    public function salvar(TelefoneRequest $request, $cliente_id)
    {
        $telefone = new Telefone();
        $telefone->titulo = $request->input('titulo');
        $telefone->telefone = $request->input('telefone');

        $cliente = Cliente::find($cliente_id);
        $cliente->adicionarTelefone($telefone);

        \Session::flash('flash_message', [
            'msg' => 'Telefone adicionado com Sucesso!',
            'class' => 'alert-success'
        ]);

        return redirect()->route('cliente.detalhe', $cliente_id);
    }

    public function atualizar(TelefoneRequest $request, $id)
    {
        $telefone = Telefone::find($id);
        Telefone::find($id)->update($request->all());

        \Session::flash('flash_message', [
            'msg' => 'Telefone atualizado com sucesso!',
            'class' => 'alert-success'
        ]);

        return redirect()->route('cliente.detalhe', $telefone->cliente->id);
    }

    public function editar($id)
    {
        $telefone = Telefone::find($id);
        if (!$telefone) {
            \Session::flash('flash_message', [
                'msg' => 'Telefone não encontrado!',
                'class' => 'alert-danger'
            ]);

            return redirect()->route('cliente.detalhe', $telefone->cliente->id);
        }

        return view('telefone.editar', compact('telefone'));
    }

    public function deletar($id)
    {
        $telefone = Telefone::find($id);
        $cliente_id = $telefone->cliente->id;

        $telefone->delete();

        \Session::flash('flash_message', [
            'msg' => 'Telefone removido com sucesso!',
            'class' => 'alert-success'
        ]);

        return redirect()->route('cliente.detalhe', $cliente_id);
    }
}
