<?php

namespace App\Http\Controllers;

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
        return view('paymode.index', ['paymodes' => $paymodes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paymodes = DB::table('paymode')
            ->orderBy('id')
            ->get();
        return view('paymode.new', ['paymodes' => $paymodes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paymode = new Paymode();

        $paymode->Name = $request->Name;
        $paymode->Observation = $request->Observation;

        $paymode->save();

        $paymodes = DB::table('paymode')
            ->orderBy('id')
            ->get();

        return redirect()->route('paymodes.index');
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
        $paymode = Paymode::find($id);

        $paymodes = DB::table('paymode')
            ->orderBy('id')
            ->get();

        return view('paymode.edit', ['paymode' => $paymode, 'paymodes' => $paymodes]);
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

        return view('paymode.index', ['paymodes' => $paymodes]);
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

        return view('paymode.index', ['paymodes' => $paymodes]);
    }
}
