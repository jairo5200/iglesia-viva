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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
