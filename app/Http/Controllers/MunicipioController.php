<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Pais;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Muestra la vista con la lista de Municipios
     */
    public function index()
    {
        $municipios = Municipio::all();
        $departamentos = Departamento::all();
        return view('municipios.index',compact('municipios','departamentos'));
    }

    /**
     * Muestra el fomulario para crear un nuevo Municipio
     */
    public function create()
    {
        $municipios = Municipio::all();
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('municipios.create',compact('municipios','departamentos', 'paises'));
    }




    /**
     * Almacena el nuevo Municipio en la base de datos
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
     * Muestra el formulario para editar un Municipio especifico
     */
    public function edit(string $id)
    {
        $municipio = Municipio::findOrFail($id);
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('municipios.edit', compact('municipio','departamentos','paises'));
    }

    /**
     * Actualiza la informacion del Municipio en la base de datos
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
     * Remueve el Municipio especifico de la base de datos
     */
    public function destroy(string $id)
    {
        $municipio = Municipio::findOrFail($id);
        $municipio->delete();

        return redirect()->route('municipios.index');
    }
}
