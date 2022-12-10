<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransaccionRequest;
use App\Models\Periodo;
use App\Models\Propiedad;
use App\Models\TipoTransaccion;
use App\Models\Transaccion;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transacciones = Transaccion::all();
        return view('transaccion.index', [
            'transacciones' => $transacciones,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propiedades = DB::table('propiedad')->where('idEstadoPropiedad', '1')->get();

        $usuarios = Users::all();
        $periodos = Periodo::all();
        $tiposTransaccion = TipoTransaccion::all();
        return view('transaccion.create', [
            'propiedades' => $propiedades,
            'usuarios' => $usuarios,
            'periodos' => $periodos,
            'tiposTransaccion' => $tiposTransaccion,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransaccionRequest $request)
    {
        $idEstadoPropiedad = 0;
        switch ($request->idTipoTransaccion) {
            case 1:
                $idEstadoPropiedad = 2;
                break;
            case 2:
                $idEstadoPropiedad = 4;
                break;
        }
        DB::table('propiedad')
            ->where('id', $request->idPropiedad)
            ->update(['idEstadoPropiedad' => $idEstadoPropiedad]);
        $transaccion = new Transaccion();
        $transaccion->idPropiedad = $request->idPropiedad;
        $transaccion->idUsuario = $request->idUsuario;
        $transaccion->idTipoTransaccion = $request->idTipoTransaccion;
        $transaccion->fechaDeCreacion = date('y-m-d h:m:s');
        $transaccion->valor = $request->valor;
        $transaccion->descripcion = $request->descripcion;
        $transaccion->desde = $request->desde;
        $transaccion->hasta = $request->hasta;
        $transaccion->save();

        return redirect()->route('transaccion.index')->with('Exitoso', 'La transacción ha sido creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaccion $transaccion)
    {
        return view('transaccion.show', compact('transaccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaccion $transaccion)
    {
        // dd($propiedad);
        $propiedades = Propiedad::all();
        $usuarios = Users::all();
        $tiposTransaccion = TipoTransaccion::all();
        $periodos = Periodo::all();
        return view('transaccion.edit', [
            'transaccion' => $transaccion,
            'propiedades' => $propiedades,
            'periodos' => $periodos,
            'usuarios' => $usuarios,
            'tiposTransaccion' => $tiposTransaccion,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransaccionRequest $request, Transaccion $transaccion)
    {
        $transaccion->fill($request->post())->save();
        return redirect()->route('transaccion.index')->with('Exitoso', 'La transacción ha sido editado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaccion $transaccion)
    {
        DB::table('propiedad')
            ->where('id', $transaccion->idPropiedad)
            ->update(['idEstadoPropiedad' => 1]);

        if ($transaccion->delete() == true) {
            return response()->json(['success' => 'La transaccion ' . $transaccion->id . ' ha sido eliminada con exito']);
        } else {
            return response()->json(['error' => 'Hubo un error al eliminar la transacción ID n°' . $transaccion->id]);
        }
    }
}
