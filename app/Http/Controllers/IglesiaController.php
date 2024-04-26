<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Iglesia;
use App\Models\Municipio;
use App\Models\Pais;
use Illuminate\Http\Request;

class IglesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iglesias = Iglesia::all();
        $municipios = Municipio::all();
        return view('iglesias.index',compact('iglesias','municipios',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $iglesias = Iglesia::all();
        $municipios = Municipio::all();
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('iglesias.create',compact('iglesias','municipios','departamentos', 'paises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        Iglesia::create($request->all());

        return redirect()->route('iglesias.index');
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
        $iglesia = Iglesia::findOrFail($id);
        $municipio = Municipio::all();
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('iglesias.edit', compact('iglesia','municipio','departamentos','paises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $iglesia = Iglesia::findOrFail($id);
        $iglesia->update($request->all());

        return redirect()->route('iglesias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $iglesia = Iglesia::findOrFail($id);
        $iglesia->delete();

        return redirect()->route('iglesias.index');
    }
}
