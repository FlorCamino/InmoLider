<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudad::all();
        return view('ciudad.index', [
            'ciudades' => $ciudades,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $ciudad = Ciudad::create([
            'nombre' => $request->nombre
        ]);


        return redirect()->route('ciudad.index')->with('Exitoso', 'La ciudad ha sido creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudad)
    {
        return view('ciudad.show', compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        return view('ciudad.editar', compact('ciudad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
        $ciudad->fill($request->post())->save();
        return redirect()->route('ciudad.index')->with('Exitoso', 'La ciudad ha sido editada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return redirect()->route('ciudad.index')->with('Exitoso', 'La ciudad ha sido eliminada con exito.');
    }
}
