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
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('departamentos.index',compact('departamentos','paises'));
    }

    /**
     * Muestra el fomulario para crear un nuevo Departamento
     */
    public function create()
    {
        $paises = Pais::all();
        return view('departamentos.create',compact('paises'));
    }

    /**
     * Almacena el nuevo Departamento en la base de datos
     */
    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required|string|max:100',
            ]);

            Departamento::create($request->all());

            return redirect()->route('departamentos.index');
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
        $departamento = Departamento::findOrFail($id);
        $paises = Pais::all();
        return view('departamentos.edit', compact('departamento','paises'));
    }

    /**
     * Actualiza la informacion del Departamento en la base de datos
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $departamento = Departamento::findOrFail($id);
        $departamento->update($request->all());

        return redirect()->route('departamentos.index');
    }

    /**
     * Remueve el Departamentos especifico de la base de datos
     */
    public function destroy(string $id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();

        return redirect()->route('departamentos.index');
    }
}
