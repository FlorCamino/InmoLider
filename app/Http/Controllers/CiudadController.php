<?php

namespace App\Http\Controllers;

use App\Http\Requests\CiudadRequest;
use App\Models\Ciudad;


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
        $ciudades = Ciudad::all();
        return view('ciudad.create', [
            'ciudades' => $ciudades
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadRequest $request)
    {
        $ciudades = new Ciudad();
        $ciudades->nombre = $request->nombre;

        $ciudades->save();


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
        $ciudades = Ciudad::all();
        return view('ciudad.edit', compact('ciudad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CiudadRequest $request, Ciudad $ciudad)
    {
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
        $cantPropiedadesDeCiudad = count($ciudad->Propiedades()->get());
        $cantPropietariosDeCiudad = count($ciudad->Propietarios()->get());
        $cantUsuariosDeCiudad = count($ciudad->Usuarios()->get());
        if ($cantPropiedadesDeCiudad == 0 && $cantPropietariosDeCiudad == 0 && $cantUsuariosDeCiudad == 0) {
            $ciudad->delete();
            return response()->json(['success' => 'La ciudad ' . $ciudad->nombre . ' ha sido eliminado con exito']);
        } else {
            if ($cantPropiedadesDeCiudad > 0) {
                return response()->json(['error' => 'La ciudad ' . $ciudad->nombre . ' no puede ser eliminado porque contiene propiedades relacionadas.']);
            }
            if ($cantPropietariosDeCiudad > 0) {
                return response()->json(['error' => 'La ciudad ' . $ciudad->nombre . ' no puede ser eliminado porque contiene propietarios relacionados.']);
            }
            if ($cantUsuariosDeCiudad > 0) {
                return response()->json(['error' => 'La ciudad ' . $ciudad->nombre . ' no puede ser eliminado porque contiene usuarios relacionados.']);
            }
        }
    }
}
