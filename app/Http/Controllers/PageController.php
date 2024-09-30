<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }


    public function dashboard(Session $session) {
        return view('dashboard');

    }

    public function inicio(Request $request){
        $noticias = Noticia::where('activo', 1)->orderBy('updated_at', 'desc')->paginate(4);
        if ($request->ajax()) {
            $view = view('paginas.noticias', compact('noticias'))->render();
            return response()->Json(['view' => $view, 'nextPageUrl' => $noticias->nextPageUrl()]);
        }
        return view('paginas.index',compact('noticias'));
    }

    public function noticia(String $id){
        $noticia = Noticia::find($id);
        return view('paginas.noticia',compact('noticia'));
    }
}
