<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Pais;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

use function Laravel\Prompts\alert;

class DepartamentoController extends Controller
{
    /**
     * Muestra la vista con la lista de Departamentos
     */
    public function index()
    {
        // guarda en la variable todos los departamentos
        $departamentos = Departamento::all();
        // guarda en la variable todos los paises
        $paises = Pais::all();
        // devuelve la vista con la lista de departamentos y paises
        return view('departamentos.index',compact('departamentos','paises'));
    }

    /**
     * Muestra el fomulario para crear un nuevo Departamento
     */
    public function create()
    {
        // guarda en la variable todos los paises
        $paises = Pais::all();
        // devuelve la vista con el formulario para crear un nuevo Departamento
        return view('departamentos.create',compact('paises'));
    }

    /**
     * Almacena el nuevo Departamento en la base de datos
     */
    public function store(Request $request)
    {
        // validamos los parametros del request
            $request->validate([
                'name' => 'required|string|max:100',
            ]);

            // creamos un nuevo Departamento
            Departamento::create($request->all());
            // redireccionamos a la vista de la lista de Departamentos
            return redirect()->route('departamentos.index')->with('success', 'Departamento creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Muestra el formulario para editar un Departamento especifico
     */
    public function edit(string $id)
    {
        // busca el Departamento especifico
        $departamento = Departamento::findOrFail($id);
        // busca todos los paises
        $paises = Pais::all();
        // devuelve la vista con el formulario para editar el Departamento
        return view('departamentos.edit', compact('departamento','paises'));
    }

    /**
     * Actualiza la informacion del Departamento en la base de datos
     */
    public function update(Request $request, string $id)
    {
        // validamos los parametros del request
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
        // busca el Departamento especifico
        $departamento = Departamento::findOrFail($id);
        // actualiza la informacion del Departamento
        $departamento->update($request->all());
        // redireccionamos a la vista de la lista de Departamentos
        return redirect()->route('departamentos.index')->with('success', 'Departamento actualizado con éxito');
    }

    /**
     * Remueve el Departamentos especifico de la base de datos
     */
    public function destroy(string $id)
    {
        // busca el Departamento especifico
        $departamento = Departamento::findOrFail($id);
        // elimina el Departamento
        $departamento->delete();
        // redireccionamos a la vista de la lista de Departamentos
        return redirect()->route('departamentos.index')->with('success', 'Departamento eliminado con éxito');
    }
}
