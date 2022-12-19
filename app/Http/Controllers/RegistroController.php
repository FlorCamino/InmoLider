<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\Ciudad;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudad::all();
        return view(
            'login.registro',
            ['ciudades' => $ciudades]
        );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroRequest $request)
    {
        $users = new Users();
        $users->nombre = $request->nombre;
        $users->apellido = $request->apellido;
        $users->dni = $request->dni;
        $users->fechaNacimiento = $request->fechaNacimiento;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->telefono = $request->telefono;
        $users->direccion = $request->direccion;
        $users->idCiudad = $request->idCiudad;
        $users->idRol = 2;
        $users->CP = $request->CP;
        $users->fechaDeCreacion = date('y-m-d h:i:s');
        $destinationPath = 'public/perfil_imagenes/';
        if ($files = $request->file('perfil-imagen')) {
            //delete old file
            File::delete('public/perfil_imagenes/' . $request->hidden_image);
            $path = $files->store($destinationPath);

            $users->urlFoto = pathinfo($path)['basename'];
        } else {
            $users->urlFoto = null;
        }

        $users->save();

        Auth::login($users);

        return redirect("/login");
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
