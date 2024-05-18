<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       /* $productos = Producto::all();
        return view('products.index',['productos'=>$productos]);*/
        $productos = DB::table('products')->get();

        return view('products.index', ['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('name')->get();
    return view('products.new', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();
    $producto->name = $request->name;
    $producto->price = $request->price;
    $producto->stock = $request->stock;
    $producto->category_id = $request->category_id;
    $producto->save();

    return redirect()->route('products.index');
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
        $producto = Producto::find($id);
        $categorias = Categoria::orderBy('name')->get(); // Obtener todas las categorías
        return view('products.edit', ['producto' => $producto, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);
    $producto->name = $request->name;
    $producto->price = $request->price;
    $producto->stock = $request->stock;
    $producto->category_id = $request->category_id;
    $producto->save();

    return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        $productos = DB::table('products')
        ->orderBy('name')
        ->get();

        return redirect()->route('products.index');
    }
}
