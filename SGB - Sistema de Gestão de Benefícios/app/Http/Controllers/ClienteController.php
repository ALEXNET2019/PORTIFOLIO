<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //protected $cliente;
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$clientes = Cliente::all();
        $clientes = $this->cliente->all();
        return response()->json($clientes, 200);
    }

    /**
     * Show the for creating a new resourse.
     * 
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //$cliente = Cliente::create($request->all());

        $request->validate($this->cliente->rules(), $this->cliente->feedback());
        $cliente = $this->cliente->create($request->all());
        return response()->json($cliente, 201);
    }

    /** 
     * Display the specified resource.
     * 
     * @param Integer
     * @return \Illuminate\Http\Response 
     */
    public function show($id)
    {
        $cliente = $this->cliente->find($id);
        if ($cliente === null) {
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }
        return response()->json($cliente, 200);
    }

    /** 
     * Show the form for editing the specified resource.
     * 
     * @param \App\Models\Cliente $cliente
     * @return \Illuminate\Http\Response 
     */
    public function edit(Cliente $cliente)
    {
    }

    /** 
     * Show the form for editing the specified resource.
     * @param \Illuminate\Http\Request $request
     * @param Integer
     * @return \Illuminate\Http\Response 
     */
    public function update(Request $request, $id)
    {
        /*
        print_r($request->all());
        echo '<hr>';
        print_r($cliente->getAttributes());
        */
        //$cliente->update($request->all());
        $cliente = $this->cliente->find($id);
        if ($cliente === null) {
            return response()->json(['erro' => 'impossível realizar a atualização. O recurso solicitado não está disponivel'], 404);
        }
        if ($request->method() === "PATCH") {
            $regrasDinamicas = array();
            foreach ($cliente->rules() as $input => $regra) {
                if (array_key_exists($input, $request->all())) {
                    $regrasDinamicas[$input] = $regra;
                }
            }
            $request->validate($regrasDinamicas, $cliente->feedback());
        } else {
            $request->validate($cliente->rules(), $cliente->feedback());
        }


        $cliente->update($request->all());
        return response()->json($cliente, 200);
    }

    /** 
     *Remove the specified resource from stroge.
     * @param Integer
     * @return \Illuminate\Http\Response 
     */
    public function destroy($id)
    {
        $cliente = $this->cliente->find($id);
        if ($cliente === null) {
            return response()->json(['erro' => 'impossível realizar a exclusão. O recurso solicitado não está disponivel'], 404);
        }

        $cliente->delete();
        return response()->json(['msg' => 'O cliente foi excluido com sucesso!'], 200);
    }
}
