<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Models\Blog;
use App\Models\Noticia;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        // obtenemos la noticias activas en orden desendente de fecha de actualizacion con una paginacion de 4
        $noticias = Noticia::where('activo', 1)->orderBy('updated_at', 'desc')->paginate(4);
        // validamos si el resquest es ajax
        if ($request->ajax()) {
            // creamos una variable de vistas con las noticias
            $view = view('paginas.noticias', compact('noticias'))->render();
            // retornamos la respuesta a la vista con las siguientes 4 noticias
            return response()->Json(['view' => $view, 'nextPageUrl' => $noticias->nextPageUrl()]);
        }
        // si no es ajax redireccionamos a la vista de noticias
        return view('paginas.index',compact('noticias'));
    }

    public function noticia(String $id){
        // obtenemos la noticia por id
        $noticia = Noticia::find($id);
        // retornamos la vista de noticia
        return view('paginas.noticia',compact('noticia'));
    }

    public function blogsPagina(Request $request){
        // obtenemos los blogs activos en orden desendente de fecha de actualizacion con una paginacion de 6
        $blogs = Blog::where('activo', 1)->orderBy('updated_at', 'desc')->paginate(6);
        // validamos si el resquest es ajax
        if ($request->ajax()) {
            // creamos una variable de vistas con los blogs
            $view = view('paginas.datablogs', compact('blogs'))->render();
            // retornamos la respuesta a la vista con las siguientes 6 blogs
            return response()->Json(['view' => $view, 'nextPageUrl' => $blogs->nextPageUrl()]);
        }
        // si no es ajax redireccionamos a la vista de blogs
        return view('paginas.blogs',compact('blogs'));
    }

    public function blog(String $id){
        // obtenemos el blog por id
        $blog = Blog::find($id);
        // retornamos la vista de blog
        return view('paginas.blog',compact('blog'));
    }

    public function nuevo(){
        // retornamos la vista de nuevo
        return view('paginas.nuevo');
    }

    public function contactanos(Request $request) {
        // validamos los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
        ]);
        Mail::to('jairo5200@gmail.com')->send(new ContactanosMailable($request->all()));

        session()->flash('success', 'Mensaje enviado!');
        return redirect()->route('nuevo');
    }
}
