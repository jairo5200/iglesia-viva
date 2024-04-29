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
        $paises = Pais::all();
        return view('paises.index',compact('paises'));
    }

    /**
     * Muestra el fomulario para crear un nuevo País
     */
    public function create()
    {
        return view('paises.create');
    }

    /**
     * Almacena el nuevo País en la base de datos
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        Pais::create($request->all());

        return redirect()->route('paises.index');
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
        $pais = Pais::findOrFail($id);
        return view('paises.edit', compact('pais'));
    }

    /**
     * Actualiza la informacion del País en la base de datos
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $pais = Pais::findOrFail($id);
        $pais->update($request->all());

        return redirect()->route('paises.index');
    }

    /**
     * Remueve el País especifico de la base de datos
     */
    public function destroy(string $id)
    {
        $pais = Pais::findOrFail($id);
        $pais->delete();

        return redirect()->route('paises.index');
    }
}
