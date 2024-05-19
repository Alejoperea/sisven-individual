<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Paymode;
use Illuminate\Http\Request;

class PaymodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymodes = Paymode::all();
        return json_encode( ['paymodes' => $paymodes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'observation' => 'nullable|string',
    ]);

    $paymode = new Paymode();
    $paymode->name = $validatedData['name'];
    $paymode->observation = $validatedData['observation'];

    $paymode->save();

    return response()->json(['paymode' => $paymode], 200);
}


    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $paymode = Paymode::find($id);
        return json_encode( ['paymode' => $paymode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'observation' => 'nullable|string',
        ]);
    
        $paymode = Paymode::find($id);
    
        if (!$paymode) {
            return response()->json(['message' => 'Modo de pago no encontrado'], 404);
        }
    
        $paymode->name = $validatedData['name'];
        $paymode->observation = $validatedData['observation'];
        $paymode->save();
    
        return response()->json(['paymode' => $paymode], 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paymode = Paymode::find($id);
        $paymode->delete();

        $paymodes = DB::table('paymode')
            ->orderBy('id')
            ->get();

            return json_encode( ['paymodes' => $paymodes]);
    }
}