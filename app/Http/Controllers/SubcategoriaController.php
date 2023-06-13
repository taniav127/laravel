<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Psy\Command\WhereamiCommand;

class SubcategoriaController extends Controller
{
    public function index()
    {
        $subcategorias = Subcategoria::select('c.nombre as name','subcategorias.*')
        ->join('categorias as c','subcategorias.categoria_id','c.id')
        ->where ('subcategorias.estado',1)
        ->get();
        return view('admin.subcategoria.index',compact('subcategorias'));
    }

     
    public function create()
    {
        $categorias = Categoria::where('estado', '=', 1)->get();
        return view('admin.subcategoria.create',compact('categorias'));
    }

    
     
    public function store(Request $request)
    {
        $subcategorias = new subcategoria();
        $subcategorias->nombre = $request->input('nombre');
        $subcategorias->descripcion = $request->input('descripcion');
        $subcategorias->categoria_id = $request->input('categoria');
        $subcategorias->estado = 1;
        $subcategorias->save();


        return redirect(route('subcategorias.index'));
    
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
        $subcategoria = subcategoria::find($id);
        return view(('admin.subcategoria.edit'),compact('subcategoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subcategoria = subcategoria::find($id);
        $subcategoria->nombre = $request->input('nombre');
        $subcategoria->descripcion = $request->input('descripcion');
        $subcategoria->save();

        return redirect(route('subcategorias.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategorias = subcategoria::find($id);
        $subcategorias->estado = 0;
        $subcategorias->save();

        return $respuesta = "ok";
    }
}
