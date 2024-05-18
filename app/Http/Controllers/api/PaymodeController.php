<?php

namespace App\Http\Controllers\api;
use App\Models\Paymode;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymodes = Paymode::all();
        return json_encode(['paymodes' => $paymodes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => ['required', 'max:30', 'unique:paymode'],
            'observation' => ['required', 'max:255']
        ]);

        if ($validate->fails()) {
            return response()->json([
                'msg' => 'Se produjo un error en la validación de la información.',
                'statusCode' => 400
            ]);
        }



        $paymode = new Paymode();

        $paymode->Name = $request->Name;
        $paymode->Observation = $request->Observation;

        $paymode->save();

        $paymodes = DB::table('paymode')
            ->orderBy('id')
            ->get();

        return json_encode(['paymodes' => $paymodes] ); // si me sale error poner paymodes
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $paymode = Paymode::find($id);
        if(is_null($paymode)){
            return abort(404);
        }

        return json_encode(['paymodes'=> $paymode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paymode = Paymode::find($id);

        $paymode->Name = $request->Name;
        $paymode->Observation = $request->Observation;

        $paymode->save();

        $paymodes = DB::table('paymode')
            ->orderBy('id')
            ->get();

        return json_encode(['paymodes' => $paymodes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paymode = Paymode::find($id);
        $paymode->delete();

        $paymodes = DB::table('paymode')
            ->orderBy('id')
            ->get();

        return json_encode(['paymodes' => $paymodes]);
    }
}
