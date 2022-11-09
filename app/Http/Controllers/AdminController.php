<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();

        $propiedades = DB::select('SELECT p.id, p.descripcion, 
        p.direccion, p.barrio, p.CP, p.costo , p.cantBanios, 
        p.cantHab, p.estacionamiento, p.aceptaMascotas, p.amoblado,
        c.nombre as nombreCiudad, pp.nombre as nombrePropietario, 
        t.nombre as nombreTipoTransaccion, e.nombre as nombreEstadoPropiedad,
        pe.nombre as nombrePeriodo FROM propiedad p
        inner join ciudad c ON p.idciudad = c.id
        inner join propietario pp ON p.idPropietario = pp.id
        inner join tipotransaccion t ON p.idTipoTransaccion = t.id
        inner join estadoPropiedad e ON p.idEstadoPropiedad = e.id
        left join periodo pe ON p.idPeriodo = pe.id');
        return view('administrador.index', [
            'propiedades' => $propiedades,
            'titulo' => 'Listado de propiedades',
            "usuario" => $usuario
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propiedad.show');
    }
    private function validar(Request $request)
    {
        Validator::make($request->post(), [
            // 'nombre' => ['required', 'alpha'],
            // 'apellido' => ['required', 'alpha'],
            // 'legajo' => ['required', 'numeric']
        ])->validate();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validar($request);
        try {
            DB::transaction(function () use ($request) {
                DB::insert('INSERT INTO propiedad (descripcion, fechaCreacion, direccion,barrio,CP
                 cantHab, cantBanios, estacionamiento, aceptaMascotas, amoblado, costo) values(?,?,?,?)', [
                    $request->post('descripcion'),
                    $request->post('fechaCreacion'),
                    $request->post('direccion'),
                    $request->post('barrio'),
                    $request->post('CP'),
                    $request->post('cantHab'),
                    $request->post('cantBanios'),
                    $request->post('estacionamiento'),
                    $request->post('aceptaMascotas'),
                    $request->post('amoblado'),
                    $request->post('costo')
                ]);
            });
            return redirect(route('administrador.login'));
        } catch (\Exception $exception) {
            DB::rollBack();
            echo $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propiedades = DB::selectOne("SELECT * FROM propiedad WHERE id = {$id}");
        return view('administrador.show', [
            'propiedades' => $propiedades
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Propiedad $propiedad)
    {
        return view('administrador.editar', compact('propiedad'));
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
            'nombre' => 'required',
        ]);
        $propiedad->fill($request->post())->save();
        return redirect()->route('propiedad.index')->with('Exitoso', 'La ciudad ha sido editada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propiedad $propiedad)
    {
        $propiedad->delete();
        return redirect()->route('propiedad.index')->with('Exitoso', 'La ciudad ha sido eliminada con exito.');
    }
}
