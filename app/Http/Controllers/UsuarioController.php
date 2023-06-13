<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::where('estado',1)->get();
        return view(('admin.usuarios.index'),compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('admin.usuarios.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuarios = new User();
        $usuarios->nombre = $request->input('nombre');
        $usuarios->correo = $request->input('correo');
        $usuarios->estado = 1;
        $usuarios->save();

        return redirect(route('usuarios.index'));

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
        $user = User::find($id);
        return view(('admin.usuarios.edit'),compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuarios = User::find($id);
        $usuarios->nombre = $request->input('nombre');
        $usuarios->correo = $request->input('correo');
        $usuarios->save();

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuarios = User::find($id);
        $usuarios->estado = 0;
        $usuarios->save();

        return $respuesta = "ok";
    }
}
