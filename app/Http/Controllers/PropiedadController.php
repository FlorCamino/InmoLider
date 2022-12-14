<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropiedadRequest;
use App\Models\Ciudad;
use App\Models\Propiedad;
use App\Models\PropiedadImagenes;
use App\Models\Propietario;
use App\Models\TipoTransaccion;
use Illuminate\Support\Facades\File;

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
        $tiposTransaccion = TipoTransaccion::all();
        return view('propiedad.create', [
            'ciudades' => $ciudades,
            'propietarios' => $propietarios,
            'tiposTransaccion' => $tiposTransaccion
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropiedadRequest $request)
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
        $propiedad->estacionamiento = ($request->estacionamiento = 'on') ? 1 : 0;
        $propiedad->aceptaMascotas = ($request->aceptaMascotas = 'on') ? 1 : 0;
        $propiedad->fechaCreacion = date('y-m-d h:i:s');
        $propiedad->amoblado = ($request->amoblado = 'on') ? 1 : 0;
        $propiedad->idTipoTransaccion = $request->idTipoTransaccion;
        $propiedad->costo = $request->costo;
        $propiedad->idEstadoPropiedad = 1;
        $propiedad->idCiudad = $request->idCiudad;

        $propiedad->save();

        $destinationPath = 'public/propiedad_imagenes/';
        if ($files = $request->file('image1')) {
            //delete old file
            File::delete('public/propiedad_imagenes/' . $request->hidden_image);
            $path = $files->store($destinationPath);

            $propiedadImagenes = new PropiedadImagenes();
            $propiedadImagenes->idPropiedad = $propiedad->id;
            $propiedadImagenes->urlImg = $path;
            $propiedadImagenes->fechaDeCarga =  date('y-m-d h:i:s');

            $propiedadImagenes->save();
        }

        if ($files = $request->file('image2')) {
            //delete old file
            File::delete('public/propiedad_imagenes/' . $request->hidden_image);
            $path = $files->store($destinationPath);

            $propiedadImagenes = new PropiedadImagenes();
            $propiedadImagenes->idPropiedad = $propiedad->id;
            $propiedadImagenes->urlImg = $path;
            $propiedadImagenes->fechaDeCarga =  date('y-m-d h:i:s');

            $propiedadImagenes->save();
        }
        if ($files = $request->file('image3')) {
            //delete old file
            File::delete('public/propiedad_imagenes/' . $request->hidden_image);
            $path = $files->store($destinationPath);

            $propiedadImagenes = new PropiedadImagenes();
            $propiedadImagenes->idPropiedad = $propiedad->id;
            $propiedadImagenes->urlImg = $path;
            $propiedadImagenes->fechaDeCarga =  date('y-m-d h:i:s');

            $propiedadImagenes->save();
        }
        if ($files = $request->file('image4')) {
            //delete old file
            File::delete('public/propiedad_imagenes/' . $request->hidden_image);
            $path = $files->store($destinationPath);

            $propiedadImagenes = new PropiedadImagenes();
            $propiedadImagenes->idPropiedad = $propiedad->id;
            $propiedadImagenes->urlImg = $path;
            $propiedadImagenes->fechaDeCarga =  date('y-m-d h:i:s');

            $propiedadImagenes->save();
        }

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
        // dd($propiedad);
        $ciudades = Ciudad::all();
        $propietarios = Propietario::all();
        $tiposTransaccion = TipoTransaccion::all();
        return view('propiedad.edit', compact(
            'propiedad',
            'ciudades',
            'propietarios',
            'tiposTransaccion',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropiedadRequest $request, Propiedad $propiedad)
    {
        $propiedad->titulo = $request->titulo;
        $propiedad->descripcion = $request->descripcion;
        $propiedad->direccion = $request->direccion;
        $propiedad->barrio = $request->barrio;
        $propiedad->CP = $request->CP;
        $propiedad->idPropietario = $request->idPropietario;
        $propiedad->cantHab = $request->cantHab;
        $propiedad->cantBanios = $request->cantBanios;
        $propiedad->estacionamiento = ($request->estacionamiento = 'on') ? 1 : 0;
        $propiedad->aceptaMascotas = ($request->aceptaMascotas = 'on') ? 1 : 0;
        $propiedad->amoblado = ($request->amoblado = 'on') ? 1 : 0;
        $propiedad->idTipoTransaccion = $request->idTipoTransaccion;
        $propiedad->costo = $request->costo;
        $propiedad->idCiudad = $request->idCiudad;

        $propiedad->save();
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
        $cantTransaccionesDePropiedad = count($propiedad->Transacciones()->get());
        if ($cantTransaccionesDePropiedad == 0) {
            $propiedad->delete();
            return response()->json(['success' => 'La propiedad ' . $propiedad->id . ' ha sido eliminado con exito']);
        } else {
            return response()->json(['error' => 'La propiedad ' . $propiedad->id . ' no puede ser eliminado porque contiene transacciones.']);
        }
    }

    public function getIdTipoTransaccion(Int $idPropiedad)
    {

        $propiedad = Propiedad::find($idPropiedad);
        return $propiedad->idTipoTransaccion;
    }
}
