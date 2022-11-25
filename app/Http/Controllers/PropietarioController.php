<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Propietario;
use Illuminate\Http\Request;

use Validator;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propietarios = Propietario::all();
        return view('propietario.index', [
            'propietarios' => $propietarios,
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
        return view('propietario.create', [
            'ciudades' => $ciudades,
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
        // $request->validate([
        //     'nombre' => ['required', 'alpha'],
        //     'apellido' => ['required', 'alpha'],
        //     'dni' => ['required', 'numeric'],
        //     'fechaNacimiento' => ['required', 'date'],
        //     'email' => ['required', 'email'],
        //     'telefono' => ['required', 'numeric'],
        //     'domicilio' => ['required', 'alpha_num'],
        //     'CP' => ['required', 'alpha_num'],
        //     'idCiudad' => ['required', 'numeric']
        // ]);

        $propietario = new Propietario();
        $propietario->nombre = $request->nombre;
        $propietario->apellido = $request->apellido;
        $propietario->dni = $request->dni;
        $propietario->fechaNacimiento = $request->fechaNacimiento;
        $propietario->email = $request->email;
        $propietario->telefono = $request->telefono;
        $propietario->domicilio = $request->domicilio;
        $propietario->CP = $request->CP;
        $propietario->descripcion = $request->descripcion;
        $propietario->fechaDeCarga = date('y-m-d h:i:s');
        $propietario->idCiudad = $request->idCiudad;

        $propietario->save();

        return redirect()->route('propietario.index')->with('Exitoso', 'La ciudad ha sido creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Propietario $propietario)
    {
        return view('propietario.show', compact('propietario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Propietario $propietario)
    {
        $ciudades = Ciudad::all();
        return view('propietario.edit', compact('propietario', 'ciudades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propietario $propietario)
    {
        // $request->validate([
        //     'nombre' => ['required', 'alpha'],
        //     'apellido' => ['required', 'alpha'],
        //     'dni' => ['required', 'numeric'],
        //     'fechaNacimiento' => ['required', 'date'],
        //     'email' => ['required', 'email'],
        //     'telefono' => ['required', 'numeric'],
        //     'domicilio' => ['required', 'alpha_num'],
        //     'CP' => ['required', 'alpha_num'],
        //     'idCiudad' => ['required', 'numeric']
        // ]);
        $propietario->fill($request->post())->save();
        return redirect()->route('propietario.index')->with('Exitoso', 'El propietario ha sido editada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietario $propietario)
    {
        $cantPropiedadesDePropietario = count($propietario->Propiedades()->get());
        if ($cantPropiedadesDePropietario == 0) {
            $propietario->delete();
            return response()->json(['success' => 'El propietario ' . $propietario->nombre . ' ha sido eliminado con exito']);
        } else {
            return response()->json(['error' => 'El propietario ' . $propietario->nombre . ' no puede ser eliminado porque contiene propiedades a su nombre.']);
        }
    }
}
