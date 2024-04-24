<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Pais;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipios = Municipio::all();
        $departamentos = Departamento::all();
        return view('municipios.index',compact('municipios','departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $municipios = Municipio::all();
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('municipios.create',compact('municipios','departamentos', 'paises'));
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        Municipio::create($request->all());

        return redirect()->route('municipios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $municipio = Municipio::findOrFail($id);
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('municipios.edit', compact('municipio','departamentos','paises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $municipio = Municipio::findOrFail($id);
        $municipio->update($request->all());

        return redirect()->route('municipios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $municipio = Municipio::findOrFail($id);
        $municipio->delete();

        return redirect()->route('municipios.index');
    }
}
