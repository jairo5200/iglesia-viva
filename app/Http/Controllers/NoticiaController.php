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
        // obtenemos la lista de noticias ordenadas por fecha de actualizacion de manera descendente
        $noticias = Noticia::orderBy('updated_at', 'desc')->get();
        // retornamos la vista de noticias
        return view('noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // retornamos la vista de crear noticias
        return view('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validamos los datos del formulario
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
        // creamos una noticia con los datos del request
        $noticia = $request->all();
        // validamos si el request tiene imagen
        if ($imagen = $request->file('imagen')) {
            // inicializamos la ruta de la imagen
            $rutaGuardarImg = 'imagen/';
            // obtenemos el nombre de la imagen
            $imagenNoticia = date('YmdHis').".".$imagen->getClientOriginalExtension();
            // guardamos la imagen en el servidor
            $imagen->move($rutaGuardarImg,$imagenNoticia);
            // actualizamos el request con la ruta de la imagen
            $noticia['imagen'] = "$imagenNoticia";
        }
        // creamos la noticia en la base de datos
        Noticia::create($noticia);
        // redireccionamos a la vista de noticias
        return redirect()->route('noticias.index')->with('success', 'Noticia creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // obtenemos la noticia por su id
        $noticia = Noticia::find($id);
        //redireccionamos a la vista de noticias
        return view('noticias.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // obtenemos la noticia por su id
        $noticia = Noticia::find($id);
        // redireccionamos a la vista de editar noticias
        return view('noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validamos la informacion del request
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
        // obtenemos la noticia por su id
        $noticia = Noticia::find($id);
        // creamos una noticia con la informacion del request
        $noticiaCambio = $request->all();
        // inicializamos la ruta de la imagen
        $rutaGuardarImagen = 'imagen/';
        // validamos la imagen del request
        if($imagen = $request->file('imagen')) {
            // obtenemos la ruta completa de la imagen
            $ruta = $rutaGuardarImagen.$noticia['imagen'];
            // validamos si la noticia tenia una imagen
            if($noticia['imagen'] != null){
            unlink($ruta); // con este código se elimina la imagen de la carpeta
            }
            // creamos un nombre unico para la imagen
            $imagenNoticia = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            // guardamos la imagen en la carpeta
            $imagen->move($rutaGuardarImagen, $imagenNoticia);
            // actualizamos la ruta de la imagen en la noticia
            $noticiaCambio['imagen'] = "$imagenNoticia";
        }
        // actualizamos la noticia en la base de datos
        $noticia->update($noticiaCambio);
        // redireccionamos a la vista de noticias
        return redirect()->route('noticias.index')->with('success', 'Noticia actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // obtenemos la noticia por su id
        $noticia = Noticia::find($id);
        // inicializamos la ruta de la imagen
        $rutaGuardarImagen = 'imagen/';
        // validamos si la noticia tenia una imagen
        if ($noticia->imagen != null) {
            // obtenemos la ruta completa de la imagen
            $ruta = $rutaGuardarImagen.$noticia['imagen'];
            unlink($ruta);  // con este código se elimina la imagen de la carpeta.
        }
        // eliminamos la noticia de la base de datos
        $noticia->delete();
        // redireccionamos a la vista de noticias
        return redirect()->route('noticias.index')->with('success', 'Noticia eliminada con exito');
    }
}
