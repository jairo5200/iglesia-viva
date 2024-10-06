<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // busca todos los blogs los roganiza por la fecha de actualizacion de manera desendente
        $blogs = Blog::orderBy('updated_at', 'desc')->get();
        // retorna la visa de los blogs enviando la lista de blogs
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // retorna la vista para crear un nuevo blog
        return  view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validamos los datos del formulario si el blog tiene imagen
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
        // creamos un nuevo blog tomando los datos del request
        $blog = $request->all();
        // si el blog tiene imagen la procesamos
        if ($imagen = $request->file('imagen')) {
            // inicializamos una ruta donde guardaremos la imagen
            $rutaGuardarImg = 'imagen/';
            // obtenemos el nombre de la imagen
            $imagenBlog = date('YmdHis').".".$imagen->getClientOriginalExtension();
            // guardamos la imagen en la ruta especificada
            $imagen->move($rutaGuardarImg,$imagenBlog);
            // actualizamos el blog con la imagen
            $blog['imagen'] = "$imagenBlog";
        }
        // creamos el blog en la base de datos
        Blog::create($blog);
        // redireccionamos a la vista de blogs
        return redirect()->route('blogs.index')->with('success', 'Blog creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // obtenemos el blog por su id
        $blog = Blog::find($id);
        // retornamos la visa de blog con el blog encontrado
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // obtenemos el blog por su id
        $blog = Blog::find($id);
        // retornamos la vista de editar blog con el blog encontrado
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validamos los datos del request
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
        // obtenemos el blog por su id
        $blog = Blog::find($id);
        // asignamos al blog los datos recibidos en el request
        $blogCambio = $request->all();

        // inicializamos una ruta donde guardaremos la imagen
        $rutaGuardarImagen = 'imagen/';
        // obtenemos la imagen del request
        if($imagen = $request->file('imagen')) {
            // obtenemos la ruta completa de la imagen
            $ruta = $rutaGuardarImagen.$blog['imagen'];
            // si el blog tenia una foto se la elimina de la carpeta
            if($blog['imagen'] != null){
            unlink($ruta); // con este código se elimina la foto de la carpeta
            }
            // obtenemos el nombre de la imagen
            $imagenblog = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            // guardamos la imagen en la ruta especificada
            $imagen->move($rutaGuardarImagen, $imagenblog);
            // asignamos la imagen al blog
            $blogCambio['imagen'] = "$imagenblog";
        }
        // actualizamos el blog con los datos recibidos
        $blog->update($blogCambio);
        // redireccionamos a la ruta de blogs
        return redirect()->route('blogs.index')->with('success', 'Blog actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // obtenemos el blog por su id
        $blog = Blog::find($id);
        // obtenemos la ruta de la imagen del blog
        $rutaEliminarImagen = 'imagen/';
        // si el blog tenia una foto se la elimina de la carpeta
        if($blog['imagen'] != null){
            unlink($rutaEliminarImagen.$blog['imagen']); // con este código se elimina la foto
        }
        // eliminamos el blog
        $blog->delete();
        // redireccionamos a la ruta de blogs
        return redirect()->route('blogs.index')->with('success', 'Blog eliminado con exito');
    }
}
