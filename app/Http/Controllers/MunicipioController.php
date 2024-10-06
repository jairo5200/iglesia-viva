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
        // obtenemos la lista de municipios
        $municipios = Municipio::all();
        // obtenemos la lista de departamentos
        $departamentos = Departamento::all();
        // retornamos la vista de municipios con al informacion de municipios y departamentos
        return view('municipios.index',compact('municipios','departamentos'));
    }

    /**
     * Muestra el fomulario para crear un nuevo Municipio
     */
    public function create()
    {
        // obtenemos la lista de municipios
        $municipios = Municipio::all();
        // obtenemos la lista de departamentos
        $departamentos = Departamento::all();
        // obtenemos la lista de paises
        $paises = Pais::all();
        // retornamos la vista de municipios con al informacion de municipios, departamentos y paises
        return view('municipios.create',compact('municipios','departamentos', 'paises'));
    }




    /**
     * Almacena el nuevo Municipio en la base de datos
     */
    public function store(Request $request)
    {
        // validamos la informacion del request
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
        // creamos el municipio con la informacion del request
        Municipio::create($request->all());
        // redireccionamos a la vista de municipios
        return redirect()->route('municipios.index')->with('success', 'Municipio creado con éxito');
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
        // obtenemos el municipio que se va a editar
        $municipio = Municipio::findOrFail($id);
        // obtenemos la lista de departamentos
        $departamentos = Departamento::all();
        // obtenemos la lista de paises
        $paises = Pais::all();
        // retornamos la vista de municipios con la informacion del municipio, departamentos y paises
        return view('municipios.edit', compact('municipio','departamentos','paises'));
    }

    /**
     * Actualiza la informacion del Municipio en la base de datos
     */
    public function update(Request $request, string $id)
    {
        // validamos la informacion del request
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
        // obtenemos el municipio que se va a editar
        $municipio = Municipio::findOrFail($id);
        // actualizamos el municipio con la informacion del request
        $municipio->update($request->all());
        // redireccionamos a la vista de municipios
        return redirect()->route('municipios.index')->with('success', 'Municipio actualizado con éxito');
    }

    /**
     * Remueve el Municipio especifico de la base de datos
     */
    public function destroy(string $id)
    {
        // obtenemos el municipio que se va a eliminar
        $municipio = Municipio::findOrFail($id);
        // eliminamos el municipio
        $municipio->delete();
        // redireccionamos a la vista de municipios
        return redirect()->route('municipios.index')->with('success', 'Municipio eliminado con éxito');
    }
}
