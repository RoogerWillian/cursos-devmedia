<?php

namespace App\Http\Controllers;

use App\Veiculo;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Http\Response;

class VeiculoController extends Controller
{

    protected function validarVeiculo($request)
    {
        $validator = Validator::make($request->all(), [
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|numeric|min:0',
            'preco' => 'required|numeric|min:0',
        ]);
        return $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculo::all();

        return response()->json(['veiculos' => $veiculos], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarVeiculo($request);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Erro',
                'errors' => $validator->errors()
            ], Response::HTTP_BAD_REQUEST);
        }

        $data = $request->only(['marca', 'modelo', 'ano', 'preco']);
        if ($data) {
            $veiculo = Veiculo::create($data);
            if ($veiculo)
                return response()->json(['data' => $veiculo], Response::HTTP_CREATED);
            else
                return response()->json(['data' => 'Erro ao criar o veículo'], Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['data' => 'Dados inválidos'], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id < 0) {
            return response()->json([
                'message' => 'ID menor que zero, por favor, informe um ID válido'
            ], Response::HTTP_BAD_REQUEST);
        }

        $veiculo = Veiculo::find($id);
        if ($veiculo) {
            return response()->json([$veiculo], Response::HTTP_OK);
        } else {
            return response()->json
            (['message' => 'O veículo com id ' . $id . ' não existe'], Response::HTTP_NOT_FOUND);
        }
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
        $validator = $this->validarVeiculo($request);
        if ($validator->fails()) {
            return response()->json(['message' => 'Erro', 'errors' => $validator->errors()], Response::HTTP_BAD_REQUEST);
        }
        $data = $request->only(['marca', 'modelo', 'ano', 'preco']);
        if ($data) {
            $veiculo = Veiculo::find($id);
            if ($veiculo) {
                $veiculo->update($data);
                return response()->json(['veiculo', $veiculo], 200);
            } else
                return response()->json(['message' => "O veículo com ID {$id} não existe"], Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => 'Dados inválidos'], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id < 0) {
            return response()->json
            (['message' => 'ID menor que zero, por favor, 
              informe um ID válido'], 400);
        }
        $veiculo = Veiculo::find($id);
        if ($veiculo) {
            $veiculo->delete();
            return response()->json([], 204);
        } else {
            return response()->json
            (['message' => 'O veículo com id 
           ' . $id . ' não existe'], 404);
        }
    }
}
