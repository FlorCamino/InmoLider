<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index', [
            'usuarios' => $usuarios,
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
        $roles = Rol::all();
        return view('usuario.create', [
            'ciudades' => $ciudades,
            'roles' => $roles
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
        $propiedad = new Propiedad();
        $propiedad->titulo = $request->titulo;
        $propiedad->descripcion = $request->descripcion;
        $propiedad->direccion = $request->direccion;
        $propiedad->barrio = $request->barrio;
        $propiedad->CP = $request->CP;
        $propiedad->idPropietario = $request->idPropietario;
        $propiedad->cantHab = $request->cantHab;
        $propiedad->cantBanios = $request->cantBanios;
        $propiedad->estacionamiento = $request->estacionamiento;
        $propiedad->aceptaMascotas = $request->aceptaMascotas;
        $propiedad->fechaCreacion = date('y-m-d h:i:s');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
