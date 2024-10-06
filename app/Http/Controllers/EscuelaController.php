<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use App\Models\Fiel;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // obtenemos el parametro id del request
        $id =$request->input('id');
        // obtenemos el fiel
        $fiel = Fiel::findOrFail($id);
        // retornamos la vista de crear escuela con los datos del fiel
        return view('escuelas.create', compact('fiel'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // obtenemos el id del fiel
        $id = $request->input('fiel_id');
        // obtenemos el fiel
        $fiel = Fiel::findOrFail($id);
        // obtenemos las escuelas de ese fiel
        $escuelas = Escuela::where('fiel_id', $id)->orderBy('fecha_inicio', 'asc')->get();
        // creamos una escuela con los datos del request
        $escuela = $request->all();
        // creamos la escuela
        Escuela::create($escuela);
        // retornamos la vista de la lista de escuelas con los datos del fiel
        return redirect()->route('fiels.show', compact('fiel','escuelas'))->with('success', 'Escuela creada con éxito');
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
        // obtenemos la escuela a editar
        $escuela = Escuela::findOrFail($id);
        // retornamos la vista de editar escuela con los datos de la escuela
        return view('escuelas.edit', compact('escuela'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // obtenemos obtenemos el id del fiel
        $fiel_id = $request->input('fiel_id');
        // obtenemos el fiel
        $fiel = Fiel::findOrFail($fiel_id);
        // creamos una escuela con los datos del request
        $escuela = $request->all();
        // buscamos la escuela y actualizamos su informacion
        Escuela::findOrFail($id)->update($escuela);
        // retornamos la vista de la lista de escuelas con los datos del fiel
        return redirect()->route('fiels.show', compact('fiel'))->with('success', 'Escuela actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // obtenemos la escuela a eliminar
        $escuela = Escuela::findOrFail($id);
        // ob tenemos el fiel de la escuela
        $fiel = Fiel::findOrFail($escuela->fiel_id);
        // eliminamos la escuela
        Escuela::findOrFail($id)->delete();
        // retornamos la vista de la lista de escuelas con los datos del fiel
        return redirect()->route('fiels.show', compact('fiel'))->with('success', 'Escuela eliminada con éxito');
    }
}
