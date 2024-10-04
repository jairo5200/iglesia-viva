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
        $informes = Informe::orderBy('fecha', 'desc')->get();
        return view('informes.index', compact('informes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('informes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        Informe::create($request->all());
        return redirect()->route('informes.index')->with('success', 'Informe creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $informe = Informe::find($id);
        return view('informes.show', compact('informe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $informe = Informe::find($id);
        return view('informes.edit', compact('informe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
        Informe::find($id)->update($request->all());
        return redirect()->route('informes.index')->with('success', 'Informe actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $informe = Informe::find($id);
        $informe->delete();
        return redirect()->route('informes.index')->with('success', 'Informe eliminado con éxito');
    }
}
