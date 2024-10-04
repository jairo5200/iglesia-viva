<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('updated_at', 'desc')->get();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('blogs.create');
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
        $blog = $request->all();
        if ($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenBlog = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg,$imagenBlog);
            $blog['imagen'] = "$imagenBlog";
        }
        Blog::create($blog);
        return redirect()->route('blogs.index')->with('success', 'Blog creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::find($id);
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
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
        $blog = Blog::find($id);
        $blogCambio = $request->all();

        $rutaGuardarImagen = 'imagen/';
        if($imagen = $request->file('imagen')) {
            $ruta = $rutaGuardarImagen.$blog['imagen'];
            if($blog['imagen'] != null){
            unlink($ruta); // con este código se elimina la foto de la carpeta
            }
            $imagenblog = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImagen, $imagenblog);
            $blogCambio['imagen'] = "$imagenblog";
        }
        $blog->update($blogCambio);
        return redirect()->route('blogs.index')->with('success', 'Blog actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $rutaEliminarImagen = 'imagen/';
        if($blog['imagen'] != null){
            unlink($rutaEliminarImagen.$blog['imagen']); // con este código se elimina la foto
        }
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog eliminado con exito');
    }
}
