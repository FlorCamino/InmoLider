<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;
use App\Models\Ciudad;
use App\Models\Rol;
use App\Models\Users;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Users::all();
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
    public function store(FormDataRequest $request)
    {

        $usuario = new Users();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->dni = $request->dni;
        $usuario->fechaNacimiento = $request->fechaNacimiento;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->direccion = $request->direccion;
        $usuario->CP = $request->CP;
        $usuario->fechaDeCreacion = date('y-m-d h:i:s');
        $usuario->idCiudad = $request->idCiudad;
        $usuario->idRol = $request->idRol;
        // $usuario->password = '1234'

        $usuario->save();
        return redirect()->route('usuario.index')->with('Exitoso', 'El usuario ha sido creado con exito.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Users $usuario)
    {
        return view('usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $usuario)
    {

        $ciudades = Ciudad::all();
        $roles = Rol::all();
        return view('usuario.edit', compact('usuario', 'ciudades', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $usuario)
    {
        $usuario->fill($request->post())->save();
        return redirect()->route('usuario.index')->with('Exitoso', 'El usuario ha sido editado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $usuario)
    {
        $cantTransaccionesDeUsuario = count($usuario->Transacciones()->get());
        if ($cantTransaccionesDeUsuario == 0) {
            $usuario->delete();
            return response()->json(['success' => 'El usuario ' . $usuario->nombre . ' ha sido eliminado con exito']);
        } else {
            return response()->json(['error' => 'El usuario ' . $usuario->nombre . ' no puede ser eliminado porque contiene propiedades a su nombre.']);
        }
    }
}
