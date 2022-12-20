<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('login.login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        // dd($request->post('email'));
        if (Auth::attempt([
            'email' => $request->post('email'),
            'password' => $request->post('password')
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('/inicio');
        } else {
            return back()->withErrors([
                'email' => 'El email es incorrecto',
                'password' => 'La contraseña np coincide con el usuario'
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
        return redirect(route('login.login'));
    }
}
