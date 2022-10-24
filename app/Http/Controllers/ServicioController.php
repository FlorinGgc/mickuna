<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\servicio;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicio= DB::table('servicios')->paginate(25);

        return view('servicio.servicio')
        ->with('Servicios', $servicio);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicio.create');
    }
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $servicios = new servicio();

       $servicios->id = $request->get('idservicios');
       $servicios->tiposervicios = $request->get('tiposervicios');
       $servicios->mecanico = $request->get('mecanico');
       $servicios->evaluaciones = $request->get('evaluaciones');
       $servicios->diagnosticos = $request->get('diagnosticos');

       $servicios->save();
       return redirect('/servicio');


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
    {error_log('message here.');

        $servicio = DB::table('servicios')
        ->select('servicios.*')
        ->where('servicios.id','=',$id)
        ->first();

        return view('servicio.edit')
        ->with('servicio', $servicio);



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
        $servicio = Servicio::find($id);

        $servicio->id = $request->get('id');
        $servicio->tiposervicios = $request->get('tiposervicios');
        $servicio->mecanico = $request->get('mecanico');
        $servicio->evaluaciones = $request->get('evaluaciones');
        $servicio->diagnosticos = $request->get('diagnosticos');

        $servicio->save();

        return redirect('/servicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicio::find($id);
        $servicio->delete();

        return redirect ('/servicio');
    }
}
