<?php

namespace App\Http\Controllers;

use App\Models\DuenioCasa;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;

class DuenioCasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $duenios = DuenioCasa::latest()->paginate(5);
        return view('index', ['duenios' => $duenios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('crearDuenio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'primerApellido' => 'required',
            'direccionCasa' => 'required'
        ]);
        DuenioCasa::create($request->all());
        return redirect()->route('home')->with('success', 'Nuevo dueño de casa registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DuenioCasa $duenioCasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DuenioCasa $duenioCasa): View
    {

        dd($duenioCasa);
        //return view('editar', ['duenioCasa' => $duenioCasa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,DuenioCasa $duenioCasa):RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'primerApellido' => 'required',
            'direccionCasa' => 'required'
        ]);

        $duenioCasa = DuenioCasa::findOrFail($id);
        $duenioCasa->nombre = $request->input('nombre');
        $duenioCasa->primerApellido = $request->input('primerApellido');
        $duenioCasa->segundoApellido = $request->input('segundoApellido');
        $duenioCasa->direccionCasa = $request->input('direccionCasa');
        $duenioCasa->nroCasa = $request->input('nroCasa');

        return redirect()->route('home')->with('success', 'Datos del dueño de casa actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DuenioCasa $duenioCasa)
    {
        //
    }
}
