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
        $duenios = DuenioCasa::latest()->paginate(8);
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
    public function edit($id): View
    {
        $duenioCasa = DuenioCasa::findOrFail($id);
        return view('editarDuenio', compact('duenioCasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id):RedirectResponse
    {

        $duenioCasa = DuenioCasa::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'primerApellido' => 'required|string|max:255',
            'direccionCasa' => 'required|string|max:255'
        ]);

        $duenioCasa->update([
            'nombre' => $request->input('nombre'),
            'primerApellido' => $request->input('primerApellido'),
            'segundoApellido' => $request->input('segundoApellido'),
            'direccionCasa' => $request->input('direccionCasa'),
            'nroCasa' => $request->input('nroCasa')
        ]);

        return redirect()->route('home')->with('success', 'Datos del dueño de casa actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $duenioCasa = DuenioCasa::findOrFail($id);
        $duenioCasa->delete();
        return redirect()->route('home')->with('success', 'Dueño de casa eliminado.');
    }
}
