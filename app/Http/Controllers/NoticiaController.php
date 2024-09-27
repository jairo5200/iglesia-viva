<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::all();
        return view('noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('imagen')) {
            $request->validate([
                'titulo' => 'required|string',
                'slug' => 'required|string',
                'imagen' => 'required|image|mimes:jpeg,jpeg,png,svg|max:1024',
                'activo' => 'required|boolean',
                'user_id' => 'required|string'
            ]);
        }else {
            $request->validate([
                'titulo' => 'required|string',
                'slug' => 'required|string',
                'activo' => 'required|boolean',
                'user_id' => 'required|string'

            ]);
        }
        $noticia = $request->all();
        if ($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenNoticia = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg,$imagenNoticia);
            $noticia['imagen'] = "$imagenNoticia";
        }
        Noticia::create($noticia);
        return redirect()->route('noticias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $noticia = Noticia::find($id);
        return view('noticias.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $noticia = Noticia::find($id);
        return view('noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('imagen')) {
            $request->validate([
                'titulo' => 'required|string',
                'slug' => 'required|string',
                'imagen' => 'required|image|mimes:jpeg,jpeg,png,svg|max:1024',
                'activo' => 'required|boolean',
                'user_id' => 'required|string'
            ]);
        }else {
            $request->validate([
                'titulo' => 'required|string',
                'slug' => 'required|string',
                'activo' => 'required|boolean',
                'user_id' => 'required|string'

            ]);
        }
        $noticia = Noticia::find($id);
        $noticiaCambio = $request->all();

        $rutaGuardarImagen = 'imagen/';
        if($imagen = $request->file('imagen')) {
            $ruta = $rutaGuardarImagen.$noticia['imagen'];
            if($noticia['imagen'] != null){
            unlink($ruta); // con este código se elimina la foto de la carpeta
            }
            $imagenNoticia = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImagen, $imagenNoticia);
            $noticiaCambio['imagen'] = "$imagenNoticia";
        }
        $noticia->update($noticiaCambio);
        return redirect()->route('noticias.index')->with('info', 'Noticia actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $noticia = Noticia::find($id);
        $rutaGuardarImagen = 'imagen/';
        if ($noticia->imagen != null) {// se verifica que la noticia tenga foto.
            $ruta = $rutaGuardarImagen.$noticia['imagen'];
            unlink($ruta);  // con este código se elimina la foto de la carpeta.
        }
        $noticia->delete();
        return redirect()->route('noticias.index')->with('info', 'Noticia eliminada con exito');
    }
}
