<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Subcategoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view(('admin.productos.index'),compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subcategoria = Subcategoria::where('estado', '=', 1)->get();
        return view('admin.productos.create', compact('subcategoria'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->nombre = $request->input('nombre');
        $productos->subcategorias_id = $request->input('subca');
        $productos->cantidad = $request->input('cantidad');
        $productos->precio = $request->input('precio');
        $productos->estado = 1;
        $productos->save();

        return redirect(route('productos.index'));

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
        $productos = Producto::find($id);
        return view(('admin.productos.edit'),compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $productos = Producto::find($id);
        $productos->nombre = $request->input('nombre');
        $productos->cantidad = $request->input('cantidad');
        $productos->precio = $request->input('precio');
        $productos->save();

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productos = Producto::find($id);
        $productos->delete();
        return redirect(route('productos.index'));
    }
}
