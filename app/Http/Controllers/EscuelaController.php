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
        $id =$request->input('id');
        $fiel = Fiel::findOrFail($id);
        return view('escuelas.create', compact('fiel'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = $request->input('fiel_id');
        $fiel = Fiel::findOrFail($id);
        $escuelas = Escuela::where('fiel_id', $id)->orderBy('fecha_inicio', 'asc')->get();
        $escuela = $request->all();
        Escuela::create($escuela);
        return redirect()->route('fiels.show', compact('fiel','escuelas'));
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
        $escuela = Escuela::findOrFail($id);
        return view('escuelas.edit', compact('escuela'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fiel_id = $request->input('fiel_id');
        $fiel = Fiel::findOrFail($fiel_id);
        $escuela = $request->all();
        Escuela::findOrFail($id)->update($escuela);
        return redirect()->route('fiels.show', compact('fiel'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $escuela = Escuela::findOrFail($id);
        $fiel = Fiel::findOrFail($escuela->fiel_id);
        Escuela::findOrFail($id)->delete();
        return redirect()->route('fiels.show', compact('fiel'));
    }
}
