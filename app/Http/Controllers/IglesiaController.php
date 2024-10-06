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
        // obtenemos la lisa de iglesias
        $iglesias = Iglesia::all();
        // obtenemos la lista de municipios
        $municipios = Municipio::all();
        // retornamos la vista de iglesias con la informacion de municipios
        return view('iglesias.index',compact('iglesias','municipios',));
    }

    /**
     * Muestra el fomulario para crear una nueva Iglesia
     */
    public function create()
    {
        // obtenemos la lista de iglesias
        $iglesias = Iglesia::all();
        // obtenemos la lista de municipios
        $municipios = Municipio::all();
        // obtenemos la lista de departamentos
        $departamentos = Departamento::all();
        // obtenemos la lista de paises
        $paises = Pais::all();
        // retornamos la vista de crear iglesia con la informacion de municipios, departamentos y paises
        return view('iglesias.create',compact('iglesias','municipios','departamentos', 'paises'));
    }

    /**
     * Almacena la nueva Iglesia en la base de datos
     */
    public function store(Request $request)
    {
        // validamos los datos del formulario
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
        // creamos una iglesia con los parametros del request
        Iglesia::create($request->all());
        // redireccionamos a la vista de iglesias
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
        // obtenemos la iglesia que se quiere editar
        $iglesia = Iglesia::findOrFail($id);
        // obtenemos la lista de municipios
        $municipio = Municipio::all();
        // obtenemos la lista de departamentos
        $departamentos = Departamento::all();
        // obtenemos la lista de paises
        $paises = Pais::all();
        // retornamos la vista de editar iglesia con la informacion de la iglesia, municipio y pais
        return view('iglesias.edit', compact('iglesia','municipio','departamentos','paises'));
    }

    /**
     * Actualiza la informacion de la Iglesia en la base de datos
     */
    public function update(Request $request, string $id)
    {
        // validamos los datos del formulario
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
        // obtenemos la iglesia que se quiere editar
        $iglesia = Iglesia::findOrFail($id);
        // actualizamos la iglesia con los datos del request
        $iglesia->update($request->all());
        // redireccionamos a la vista de iglesias
        return redirect()->route('iglesias.index')->with('success', 'Iglesia actualizada con éxito');
    }

    /**
     * Remueve la Iglesia especifica de la base de datos
     */
    public function destroy(string $id)
    {
        // obtenemos la iglesia que se quiere eliminar
        $iglesia = Iglesia::findOrFail($id);
        // eliminamos la iglesia
        $iglesia->delete();
        // redireccionamos a la vista de iglesias
        return redirect()->route('iglesias.index')->with('success', 'Iglesia eliminada con éxito');
    }
}
