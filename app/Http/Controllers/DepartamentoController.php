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
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('departamentos.index',compact('departamentos','paises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Pais::all();
        return view('departamentos.create',compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departamento = Departamento::findOrFail($id);
        $paises = Pais::all();
        return view('departamentos.edit', compact('departamento','paises'));
    }

    /**
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();

        return redirect()->route('departamentos.index');
    }
}
