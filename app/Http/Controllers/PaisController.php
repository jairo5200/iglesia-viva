<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Muestra la vista con la lista de Paises
     */
    public function index()
    {
        // obtenemos la lista de paises
        $paises = Pais::all();
        // retornamos la vista con la lista de paises
        return view('paises.index',compact('paises'));
    }

    /**
     * Muestra el fomulario para crear un nuevo País
     */
    public function create()
    {
        // retornamos la vista para crear un nuevo país
        return view('paises.create');
    }

    /**
     * Almacena el nuevo País en la base de datos
     */
    public function store(Request $request)
    {
        // validamos los datos del formulario
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
        // creamos un nuevo país
        Pais::create($request->all());
        // redireccionamos a la lista de países
        return redirect()->route('paises.index')->with('success', 'Pais creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Muestra el formulario para editar un País especifico
     */
    public function edit(string $id)
    {
        // obtenemos el país a editar
        $pais = Pais::findOrFail($id);
        // retornamos la vista para editar el país
        return view('paises.edit', compact('pais'));
    }

    /**
     * Actualiza la informacion del País en la base de datos
     */
    public function update(Request $request, string $id)
    {
         // validamos los datos del formulario
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
        // obtenemos el país a editar
        $pais = Pais::findOrFail($id);
        // actualizamos el país
        $pais->update($request->all());
        // redireccionamos a la lista de países
        return redirect()->route('paises.index')->with('success', 'Pais actualizado con éxito');
    }

    /**
     * Remueve el País especifico de la base de datos
     */
    public function destroy(string $id)
    {
        // obtenemos el país a eliminar
        $pais = Pais::findOrFail($id);
        // eliminamos el país
        $pais->delete();
        // redireccionamos a la lista de países
        return redirect()->route('paises.index')->with('success', 'Pais eliminado con éxito');
    }
}
