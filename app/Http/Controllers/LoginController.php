<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UsersRequest;
use App\Models\Ciudad;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
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

    public function registro(UsersRequest $request)
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

        return redirect(route('propiedad.index'));
    }

    public function login()
    {
    }


    public function logout()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (Auth::attempt([
        //     'email' => $request,
        //     // ->post('username')
        //     'password' => $request
        //     // ->post('contrasenia')
        // ])) {
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('admin.index'));
        // } else {
        //     return back()->withErrors([
        //         'username' => "El nombre de usuario/email no coincide con ningún registro",
        //         'contrasenia' => "La contraseña no coincide con el nombre de usuario/email"
        //     ]);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // $request->session()->invalidate();
        // return redirect(route('login.index'));
    }
}
