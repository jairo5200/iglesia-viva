<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;

class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // obtenemos la lista de informes por fecha de manera descendente
        $informes = Informe::orderBy('fecha', 'desc')->get();
        // retornamos la visa de informes con la lista de informes
        return view('informes.index', compact('informes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // retornamos la vista de crear informe
        return view('informes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validamos los datos del formulario
        $request->validate([
            'fecha' => 'required|date',
            'ubicacion' => 'required|string',
            'total_adultos' => 'required|string',
            'adultos_nuevos' => 'required|string',
            'adultos_asistentes' => 'required|string',
            'discipulos' => 'required|string',
            'escuelas' => 'required|string',
            'visitas' => 'required|string',
            'total_ninos' => 'required|string',
            'ninos_nuevos' => 'required|string',
            'hermanos_planeando' => 'required|string',
            'ofrenda' => 'required|string',
        ]);
        // creamos un nuevo informe
        Informe::create($request->all());
        // redireccionamos a la vista de informes
        return redirect()->route('informes.index')->with('success', 'Informe creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // obtenemos el informe por id
        $informe = Informe::find($id);
        // retornamos la vista de informe con el informe
        return view('informes.show', compact('informe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // obtenemos el informe por id
        $informe = Informe::find($id);
        // retornamos la vista de editar informe con el informe
        return view('informes.edit', compact('informe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validamos los datos del formulario
        $request->validate([
            'fecha' => 'required|date',
            'ubicacion' => 'required|string',
            'total_adultos' => 'required|string',
            'adultos_nuevos' => 'required|string',
            'adultos_asistentes' => 'required|string',
            'discipulos' => 'required|string',
            'escuelas' => 'required|string',
            'visitas' => 'required|string',
            'total_ninos' => 'required|string',
            'ninos_nuevos' => 'required|string',
            'hermanos_planeando' => 'required|string',
            'ofrenda' => 'required|string',
        ]);
        // obtenemos el informe por id y lo actualizamos
        Informe::find($id)->update($request->all());
        // redireccionamos a la vista de informes
        return redirect()->route('informes.index')->with('success', 'Informe actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // obtenemos el informe por id
        $informe = Informe::find($id);
        // eliminamos el informe
        $informe->delete();
        // redireccionamos a la vista de informes
        return redirect()->route('informes.index')->with('success', 'Informe eliminado con éxito');
    }
}
