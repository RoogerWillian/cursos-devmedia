<?php

namespace App\Http\Controllers;

use App\Imovel;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class ImovelController extends Controller
{
    protected function validarImovel($request)
    {
        $validator = Validator::make($request->all(), [
            "descricao" => "required",
            "logradouroEndereco" => "required",
            "bairroEndereco" => "required",
            "numeroEndereco" => "required | numeric",
            "cepEndereco" => "required",
            "cidadeEndereco" => "required",
            "preco" => "required | numeric",
            "qtdQuartos" => "required | numeric",
            "tipo" => "required",
            "finalidade" => "required"
        ]);

        return $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $qtd = $request->input('qtd') ?: 10;
        $page = $request->input('page') ?: 1;
        $buscar = $request->input('buscar');
        $tipo = $request->input('tipo');

        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        $filtros = array();
        if ($buscar)
            $filtros[] = ['cidadeEndereco', 'like', '%' . $buscar . '%'];

        if ($tipo)
            $filtros[] = ['tipo', '=', $tipo];

        if ($buscar or $tipo) {
            $imoveis = DB::table('imoveis')
                ->where($filtros)
                ->paginate($qtd);
        } else {
            $imoveis = DB::table('imoveis')->paginate($qtd);
        }
        $imoveis = $imoveis->appends(Request::capture()->except('page'));

        return view('imoveis.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarImovel($request);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator->errors());

        $dados = $request->all();
        Imovel::create($dados);

        return redirect()->route('imoveis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imovel = Imovel::find($id);
        return view('imoveis.show', compact('imovel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imovel = Imovel::find($id);
        return view('imoveis.edit', compact('imovel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validarImovel($request);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator->errors());

        $imovel = Imovel::find($id);
        $dados = $request->all();
        $imovel->update($dados);

        return redirect()->route('imoveis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imovel::find($id)->delete();

        return redirect()->route('imoveis.index');
    }

    public function remover($id)
    {
        $imovel = Imovel::find($id);
        return view('imoveis.remove', compact('imovel'));
    }
}
