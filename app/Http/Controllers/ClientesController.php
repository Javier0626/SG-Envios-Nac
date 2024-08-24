<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $clientes = Cliente::all();
        
       return view('ClientesView', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('ClientesCreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Cliente::create($request->all());
        return redirect()->route('/clientes')->with('success', 'Registro agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $Cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $Cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $Cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $Cliente)
    {
        //
    }
}
