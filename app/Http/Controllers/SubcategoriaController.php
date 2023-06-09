<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Subcategoria;

class SubcategoriaController extends Controller
{
    public function index()
    {
        $subcategorias = Subcategoria::select('c.nombre as name','subcategorias.*')
        ->join('categorias as c','subcategorias.categoria_id','c.id')
        ->get();
        return view('admin.subcategoria.index',compact('subcategorias'));
    }

     
    public function create()
    {
        $categoria = Categoria::where('estado', '=', 1)->get();
        return view('admin.subcategoria.create');
    }

    
     
    public function store(Request $request)
    {
        subcategoria::$create([
            'nombre' => $request->name,
            'categorias_id' => $request->categorias_id,
            'estado' => 1
        ]);
    
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
        $subcategorias = subcategoria::find($id);
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
