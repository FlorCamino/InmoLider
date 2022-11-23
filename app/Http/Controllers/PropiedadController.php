<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\EstadoPropiedad;
use App\Models\Periodo;
use App\Models\Propiedad;
use App\Models\Propietario;
use App\Models\TipoTransaccion;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedades = Propiedad::all();
        return view('propiedad.index', [
            'propiedades' => $propiedades,
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
        $propietarios = Propietario::all();
        return view('propietario.create', [
            'ciudades' => $ciudades,
            'propietario' => $propietarios
        ]);
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
            'descripcion' => 'required', 'alpha',
            'direccion' => 'required', 'numeric',
            'barrio' => 'required',
            'CP' => 'required', 'email',
            'idPropietario' => 'required', 'anumeric',
            'cantHab;' => 'required', 'alpha numeric',
            'cantBanios' => 'required', 'alpha numeric',
            'estacionamiento' => 'required', 'boolean',
            'aceptaMascotas' => 'required', 'boolean',
            'amoblado' => 'required', 'boolean',
            'idTipoTransaccion' => 'required',
            'costo' => 'required',
            'idEstadoPropiedad' => 'required',
            'idCiudad' => 'required'
        ]);

        $propiedad = new Propiedad();
        $propiedad->descripcion = $request->descripcion;
        $propiedad->direccion = $request->direccion;
        $propiedad->barrio = $request->barrio;
        $propiedad->CP = $request->CP;
        $propiedad->idPropietario = $request->idPropietario;
        $propiedad->cantHab = $request->cantHab;
        $propiedad->cantBanios = $request->cantBanios;
        $propiedad->estacionamiento = $request->estacionamiento;
        $propiedad->aceptaMascotas = $request->aceptaMascotas;
        $propiedad->fechaDeCarga = date('y-m-d h:i:s');
        $propiedad->amoblado = $request->amoblado;
        $propiedad->idTipoTransaccion = $request->idTipoTransaccion;
        $propiedad->idPeriodo = $request->idPeriodo;
        $propiedad->costo = $request->costo;
        $propiedad->idEstadoPropiedad = $request->idEstadoPropiedad;
        $propiedad->idCiudad = $request->idCiudad;

        $propiedad->save();

        return redirect()->route('propiedad.index')->with('Exitoso', 'La propiedad ha sido creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Propiedad $propiedad)
    {
        return view('propiedad.show', compact('propiedad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Propiedad $propiedad)
    {
        $ciudades = Ciudad::all();
        $propietarios = Propietario::all();
        $tiposTransaccion = TipoTransaccion::all();
        $periodos = Periodo::all();
        $estadosPropiedad = EstadoPropiedad::all();
        return view('propiedad.edit', compact(
            'propiedad',
            'ciudades',
            'propietarios',
            'tiposTransaccion',
            'periodos',
            'estadosPropiedad'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propiedad $propiedad)
    {
        $request->validate([
            'descripcion' => 'required', 'alpha',
            'direccion' => 'required', 'numeric',
            'barrio' => 'required',
            'CP' => 'required', 'email',
            'idPropietario' => 'required', 'anumeric',
            'cantHab;' => 'required', 'alpha numeric',
            'cantBanios' => 'required', 'alpha numeric',
            'estacionamiento' => 'required', 'boolean',
            'aceptaMascotas' => 'required', 'boolean',
            'amoblado' => 'required', 'boolean',
            'idTipoTransaccion' => 'required',
            'idPeriodo' => 'required',
            'costo' => 'required',
            'idEstadoPropiedad' => 'required',
            'idCiudad' => 'required'
        ]);
        $propiedad->fill($request->post())->save();
        return redirect()->route('propiedad.index')->with('Exitoso', 'La propiedad ha sido editada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propiedad $propiedad)
    {
        $cantTransaccionesDePropiedad = count($Transaccion->Propiedades()->get());
        if ($cantTransaccionesDePropiedad == 0) {
            $propiedad->delete();
            return response()->json(['success' => 'La propiedad ' . $propietario->id . ' ha sido eliminado con exito']);
        } else {
            return response()->json(['error' => 'La propiedad ' . $propietario->id . ' no puede ser eliminado porque contiene transacciones.']);
        }
    }
}
