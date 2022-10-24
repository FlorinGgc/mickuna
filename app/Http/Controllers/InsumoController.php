<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Insumo= DB::table('insumo')->paginate(25);

        return view('Insumo.insumo')
        ->with('Insumo', $Insumo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Insumo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Insumo = new Insumo();

        $Insumo->Id = $request->get('Id');
        $Insumo->nombreproduct = $request->get('nombreproduct');
        $Insumo->fechacaducida = $request->get('fechacaducida');
        $Insumo->fechaelaboracion = $request->get('fechaelaboracion');
        $Insumo->cantidadaccesor = $request->get('cantidadaccesor');
        $Insumo->cantidadrepuesto = $request->get('cantidadrepuesto');
        $Insumo->ventas = $request->get('ventas');
        $Insumo->oferta = $request->get('oferta');


        $Insumo->save();
        return redirect('/Insumo');
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
    {
        $Insumo = DB::table('insumo')
        ->select('insumo.*','insumo.id')
        ->where('insumo.id', '=',$id)
        ->first();

    return view('Insumo.edit')
    ->with('Insumo', $Insumo);
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
        $Insumo = new Insumo();

        $Insumo->Id = $request->get('Id');
        $Insumo->nombreproduct = $request->get('nombreproduct');
        $Insumo->fechacaducida = $request->get('fechacaducida');
        $Insumo->fechaelaboracion = $request->get('fechaelaboracion');
        $Insumo->cantidadaccesor = $request->get('cantidadaccesor');
        $Insumo->cantidadrepuesto = $request->get('cantidadrepuesto');
        $Insumo->ventas = $request->get('ventas');
        $Insumo->oferta = $request->get('oferta');

        $Insumo->save();
        return redirect('/Insumo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Insumo = Insumo::find($id);
        $Insumo->delete();
        return redirect()-> back();
    }
}
