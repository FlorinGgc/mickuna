<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodega;
use Illuminate\Support\Facades\DB;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodega= DB::table('bodega')->paginate(25);

        return view('bodega.bodega')
        ->with('bodegas', $bodega);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bodega.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bodega = new Bodega();

        $bodega->id = $request->get('id');
        $bodega->nombreAbarrotes = $request->get('nombreAbarrotes');
        $bodega->cantidadProduc = $request->get('cantidadProduc');
        $bodega->cantidadAcc = $request->get('cantidadAcc');
        $bodega->CantidadInsumo = $request->get('CantidadInsumo');

        $bodega->save();
        return redirect('/Bodega');
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
        $bodega = DB::table('Bodega')
        ->select('Bodega.*')
        ->where('Bodega.id', '=', $id)
        ->first();

    return view('Bodega.edit')
    ->with('Bodega', $bodega);
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
        $bodega = Bodega::find($id);

        $bodega->id = $request->get('id');
        $bodega->nombreAbarrotes = $request->get('nombreAbarrotes');
        $bodega->cantidadProduc = $request->get('cantidadProduc');
        $bodega->cantidadAcc = $request->get('cantidadAcc');
        $bodega->CantidadInsumo = $request->get('CantidadInsumo');

        $bodega->save();
        return redirect('/Bodega');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bodega = Bodega::find($id);
        $bodega->delete();

        return redirect ('/Bodega');
    }
}
