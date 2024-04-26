<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Fiel;
use App\Models\Iglesia;
use App\Models\Municipio;
use App\Models\Pais;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class FielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iglesias = Iglesia::all();
        $fiels = Fiel::all();
        return view('fiels.index',compact('iglesias','fiels',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $iglesias = Iglesia::all();
        $municipios = Municipio::all();
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('fiels.create',compact('iglesias','municipios','departamentos', 'paises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_documento' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'fecha_de_nacimiento' => 'required',
            'telefono' => 'required|string|max:100',
            'direccion' => 'required|string|max:100',
            'fecha_de_ingreso' => 'required',
            'cargo' => 'required|string|max:100',
            'escuela_actual' => 'required|string|max:100',
            'imagen' => 'required|image|mimes:jpeg,jpeg,png,svg|max:1024',
            'pais_id' => 'required|string',
            'departamento_id' => 'required|string|',
            'municipio_id' => 'required|string|',
            'iglesia_id' => 'required|string|',

        ]);


        $fiel = $request->all();


        if ($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenFiel = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg,$imagenFiel);
            $fiel['imagen'] = "$imagenFiel";
        }
        else {
            # code...
        }

        Fiel::create($fiel);

        return redirect()->route('fiels.index');
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
    public function edit(String $id)
    {
        $fiel = Fiel::findOrFail($id);
        $iglesia = Iglesia::all();
        $municipio = Municipio::all();
        $departamentos = Departamento::all();
        $paises = Pais::all();
        return view('fiels.edit', compact('fiel','iglesia','municipio','departamentos','paises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        if ($request->hasFile('imagen')) {
            $request->validate([
                'id_documento' => 'required|string|max:100',
                'name' => 'required|string|max:100',
                'fecha_de_nacimiento' => 'required',
                'telefono' => 'required|string|max:100',
                'direccion' => 'required|string|max:100',
                'fecha_de_ingreso' => 'required',
                'cargo' => 'required|string|max:100',
                'escuela_actual' => 'required|string|max:100',
                'imagen' => 'required|image|mimes:jpeg,jpeg,png,svg|max:1024',
                'pais_id' => 'required|string',
                'departamento_id' => 'required|string|',
                'municipio_id' => 'required|string|',
                'iglesia_id' => 'required|string|',

            ]);
        }else {
            $request->validate([
                'id_documento' => 'required|string|max:100',
                'name' => 'required|string|max:100',
                'fecha_de_nacimiento' => 'required',
                'telefono' => 'required|string|max:100',
                'direccion' => 'required|string|max:100',
                'fecha_de_ingreso' => 'required',
                'cargo' => 'required|string|max:100',
                'escuela_actual' => 'required|string|max:100',
                'pais_id' => 'required|string',
                'departamento_id' => 'required|string|',
                'municipio_id' => 'required|string|',
                'iglesia_id' => 'required|string|',

            ]);
        }



        $fiele = $request->all();
        $fiel = Fiel::findOrFail($id);


        $rutaGuardarImagen = 'imagen/';
        if($imagen = $request->file('imagen')) {
            $ruta = $rutaGuardarImagen.$fiel['imagen'];
            if($fiel['imagen'] != null){
            unlink($ruta); // con este código se elimina la foto de la carpeta
            }
            $imagenFiel = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImagen, $imagenFiel);
            $fiele['imagen'] = "$imagenFiel";
        }


        $fiel->update($fiele);
        return redirect()->route('fiels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fiel = Fiel::findOrFail($id);
        $rutaGuardarImagen = 'imagen/';
        if ($fiel->imagen != null) {
            $ruta = $rutaGuardarImagen.$fiel['imagen'];
            unlink($ruta);  // con este código se elimina la foto de la carpeta
        }

        $fiel->delete();

        return redirect()->route('fiels.index');
    }
}
