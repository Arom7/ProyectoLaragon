<?php

namespace App\Http\Controllers;

use App\Models\DuenioCasa;
use App\Models\Recibo;
use Illuminate\Http\Request;

class ReciboController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('registroRecibo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'id' => 'required',
           'lecturaActual' => 'required|regex:/^[0-9]+$/',
           'mesCorrespondiente' => 'required|regex:/^[a-zA-Z]+$/'
        ]);


        Recibo::create($request->all());
        return redirect()->route('home')->with('success', 'Nuevo recibo registrado exitosamente.');
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
