<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Muestra la vista con la lista de Usuarios
     */
    public function index()
    {
        // obtenemos la lista de usuarios
         $users = User::all();
         // retornamos la vista con la lista de usuarios
         return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
     * remueve el Usuario especifico de la base de datos
     */
    public function destroy(string $id)
    {
        // obtenemos el usuario a eliminar
        $user = User::findOrFail($id);
        // eliminamos el usuario
        $user->delete();
        // redireccionamos a la vista de usuarios
        return redirect()->route('users.index')->with('success', 'Usuario eliminado con éxito');
    }
}
