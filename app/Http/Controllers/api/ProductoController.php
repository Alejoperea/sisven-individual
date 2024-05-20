<?php

namespace App\Http\Controllers\api;

use App\Models\Producto;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $productos = DB::table('products')
        // ->join('categories','products.id', '=','categories.id')
        // ->select('')
        // ->get();

        // return json_encode(['productos' => $productos]);
        
        $productos = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.*', 'categories.name as category_name')
        ->get();

       
             return response()->json(['productos' => $productos], 200);
    }   
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'category_id' => ['required', 'integer', 'exists:categories,id']
        ]);

        if ($validate->fails()) {
            return response()->json([
                'msg' => 'Se produjo un error en la validación de la información.',
                'statusCode' => 400,
                'errors' => $validate->errors()
            ]);
        }

        $producto = new Producto();
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->stock = $request->stock;
        $producto->category_id = $request->category_id;
        $producto->save();

        return json_encode(['productos' => $producto]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $producto = Producto::find($id);
        $categoria =DB::table('categories')
        ->orderBy('name')
        ->get();
        // if(is_null($productos))
        // {
        //     return abort(400);
        // };

        return json_encode(['producto' => $producto, 'categoria' =>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'category_id' => ['required', 'integer', 'exists:categories,id']
        ]);

        if ($validate->fails()) {
            return response()->json([
                'msg' => 'Se produjo un error en la validación de la información.',
                'statusCode' => 400,
                'errors' => $validate->errors()
            ]);
        }
        //
        $producto = Producto::find($id);
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->stock = $request->stock;
        $producto->category_id = $request->category_id;
        $producto->save();
    
        return json_encode(['productos'=>$producto]);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producto = Producto::find($id);
        $producto->delete();

        $productos = DB::table('products')
        ->orderBy('name')
        ->get();

        return json_encode(['productos' => $productos]);
    }
}
