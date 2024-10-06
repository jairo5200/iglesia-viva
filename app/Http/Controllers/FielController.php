<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Escuela;
use App\Models\Fiel;
use App\Models\Iglesia;
use App\Models\Municipio;
use App\Models\Pais;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class FielController extends Controller
{
    /**
     * Muestra la vista con la lista de Fieles
     */
    public function index()
    {
        // obtenemos la lista de iglesias
        $iglesias = Iglesia::all();
        // obtenemos la lista de fieles
        $fiels = Fiel::all();
        // retornamos la vista de fieles con la informacion de iglesias y fieles
        return view('fiels.index',compact('iglesias','fiels'));
    }

    /**
     * Muestra el fomulario para crear un nuevo Fiel
     */
    public function create()
    {
        // obtenemos la lista de iglesias
        $iglesias = Iglesia::all();
        // obtenemos la lista de municipios
        $municipios = Municipio::all();
        // obtenemos la lista de departamentos
        $departamentos = Departamento::all();
        // obtenemos la lista de paises
        $paises = Pais::all();
        // retornamos la vista de crear fiel con la informacion de iglesias, municipios, departamentos y paises
        return view('fiels.create',compact('iglesias','municipios','departamentos', 'paises'));
    }

    /**
     * Almacena el nuevo Fiel en la base de datos
     */
    public function store(Request $request)
    {
        // validamos los datos del formulario
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
        // creamos un fiel con la ifnormacion del request
        $fiel = $request->all();


        // verificamos que exista una imagen en el request
        if ($imagen = $request->file('imagen')) {
            // inicializamos una ruta donde guardaremos la imagen
            $rutaGuardarImg = 'imagen/';
            // obtenemos el nombre de la imagen y la extencion
            $imagenFiel = date('YmdHis').".".$imagen->getClientOriginalExtension();
            // guardamos la imagen en la ruta especificada
            $imagen->move($rutaGuardarImg,$imagenFiel);
            // agregamos la ruta de la imagen al arreglo de datos del fiel
            $fiel['imagen'] = "$imagenFiel";
        }
        // guardamos el fiel en la base de datos
        Fiel::create($fiel);
        // redireccionamos a la ruta de fieles
        return redirect()->route('fiels.index')->with('success', 'Fiel creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // buscamos el fiel por el id
        $fiel = Fiel::findOrFail($id);
        // buscamos las escuelas del fiel
        $escuelas = Escuela::where('fiel_id', $id)->orderBy('fecha_inicio', 'asc')->get();
        // retornamos la vista de el fiel con la informacion de las escuelas
        return view('fiels.show', compact('fiel','escuelas'));
    }

    /**
     * Muestra el formulario para editar un Fiel especifico
     */
    public function edit(String $id)
    {
        // buscamos el fiel por el id
        $fiel = Fiel::findOrFail($id);
        // buscamos todas las iglesias
        $iglesia = Iglesia::all();
        // buscamos todos los municipios
        $municipio = Municipio::all();
        // buscamos todos los departamentos
        $departamentos = Departamento::all();
        // buscamos todos los paises
        $paises = Pais::all();
        // retornamos la vista de el formulario para editar el fiel
        return view('fiels.edit', compact('fiel','iglesia','municipio','departamentos','paises'));
    }

    /**
     * Actualiza la informacion del Fiel en la base de datos
     */
    public function update(Request $request, String $id)
    {
        // validamos la informacion del request
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
        // creamos un fiel con la informacion del request
        $fiele = $request->all();
        // buscamos al fiel por el id
        $fiel = Fiel::findOrFail($id);
        // inicializamos la ruta donde guardaremos la imagen
        $rutaGuardarImagen = 'imagen/';
        // validamos si el request tiene una imagen
        if($imagen = $request->file('imagen')) {
            // obtenemos la ruta y el nombre de la imagen
            $ruta = $rutaGuardarImagen.$fiel['imagen'];
            // se valida si el fiel ya tenia una imagen
            if($fiel['imagen'] != null){
            unlink($ruta); // con este código se elimina la foto de la carpeta
            }
            // obtenemos el nombre de la imagen y la extencion
            $imagenFiel = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            // guardamos la imagen en la ruta
            $imagen->move($rutaGuardarImagen, $imagenFiel);
            // actualizamos la imagen del fiel
            $fiele['imagen'] = "$imagenFiel";
        }
        // actualizamos el fiel
        $fiel->update($fiele);
        // redireccionamos a la ruta de los fiels
        return redirect()->route('fiels.index')->with('success', 'Fiel actualizado con éxito');
    }

    /**
     * Remueve el Fiel especifico de la base de datos
     */
    public function destroy(string $id)
    {
        // buscamos al fiel por el id
        $fiel = Fiel::findOrFail($id);
        // inicializamos la ruta donde guardaremos la imagen
        $rutaGuardarImagen = 'imagen/';
        // se valida si el fiel tenia una imagen
        if ($fiel->imagen != null) {
            // obtenemos la ruta y el nombre de la imagen
            $ruta = $rutaGuardarImagen.$fiel['imagen'];
            unlink($ruta);  // con este código se elimina la foto de la carpeta
        }
        // eliminamos el fiel
        $fiel->delete();
        // redireccionamos a la ruta de los fiels
        return redirect()->route('fiels.index')->with('success', 'Fiel eliminado con éxito');
    }
}
