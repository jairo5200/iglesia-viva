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
     * Muestra la vista con la lista de Iglesias
     */
    public function index()
    {
        $iglesias = Iglesia::all();
        $municipios = Municipio::all();
        return view('iglesias.index',compact('iglesias','municipios',));
    }

    /**
     * Muestra el fomulario para crear una nueva Iglesia
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
     * Almacena la nueva Iglesia en la base de datos
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        Iglesia::create($request->all());

        return redirect()->route('iglesias.index')->with('success', 'Iglesia creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Muestra el formulario para editar una Iglesia especifica
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
     * Actualiza la informacion de la Iglesia en la base de datos
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $iglesia = Iglesia::findOrFail($id);
        $iglesia->update($request->all());

        return redirect()->route('iglesias.index')->with('success', 'Iglesia actualizada con éxito');
    }

    /**
     * Remueve la Iglesia especifica de la base de datos
     */
    public function destroy(string $id)
    {
        $iglesia = Iglesia::findOrFail($id);
        $iglesia->delete();

        return redirect()->route('iglesias.index')->with('success', 'Iglesia eliminada con éxito');
    }
}
