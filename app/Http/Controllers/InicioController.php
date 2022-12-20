<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;


class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $propiedades = Propiedad::all();
        return view('inicio.inicio', [
            'propiedades' => $propiedades
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Propiedad $propiedad)
    {
        return view('inicio.ver_mas', (compact('propiedad')));
    }
}
