<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::attempt([
            'email' => $request,
            // ->post('username')
            'password' => $request
            // ->post('contrasenia')
        ])) {
            $request->session()->regenerate();
            return redirect()->intended(route('administrador.index'));
        } else {
            return back()->withErrors([
                'username' => "El nombre de usuario/email no coincide con ningún registro",
                'contrasenia' => "La contraseña no coincide con el nombre de usuario/email"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->session()->invalidate();
        return redirect(route('admin.login'));
    }
}
