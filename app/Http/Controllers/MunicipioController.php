<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipios = Municipio::all();
        return view('dashboard')->with('municipios', $municipios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formInsertar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Municipio::create([
            'nombre' => $request -> input('nombre'),
            'numGasolineras' => $request -> input('numGasolineras')
        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipio $municipio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipio $municipio)
    {
        return view('formUpdate')->with('municipio',$municipio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $municipio = Municipio::where('id',$request->input('id'))->first();

        $municipio->update([
            'nombre' => $request -> input('nombre'),
            'numGasolineras' => $request -> input('numGasolineras') 
        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Municipio $municipio)
    {
        $municipio->delete();
        return redirect()->route('dashboard');

    }
}
