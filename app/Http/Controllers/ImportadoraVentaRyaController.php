<?php

namespace App\Http\Controllers;

use App\Models\ImportadoraVentaRyA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ImportadoraVentaRyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ImportadoraVentaRyA= DB::table('_importadora_venta_rya')->paginate(25);

        return view('ImportadoraVentaRyA.importadoraventarya')
        ->with('ImportadoraVentaRyas', $ImportadoraVentaRyA);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ImportadoraVentaRya.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $importadorarya = new ImportadoraVentaRyA();

        $importadorarya->id = $request->get('id');
        $importadorarya->celular = $request->get('celular');
        $importadorarya->teleempresarya = $request->get('teleempresarya');
        $importadorarya->oferta = $request->get('oferta');

        $importadorarya->save();
        return redirect('/ImportadoraVentaRyA');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $importadorarya = DB::table('_importadora_venta_rya')
        ->select('_importadora_venta_rya.*','_importadora_venta_rya.id')
        ->where('_importadora_venta_rya.id', '=',$id)
        ->first();

    return view('ImportadoraVentaRya.edit')
    ->with('ImportadoraVentaRyA', $importadorarya);
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
        $importadorarya = new ImportadoraVentaRyA();

        $importadorarya->id = $request->get('id');
        $importadorarya->celular = $request->get('celular');
        $importadorarya->teleempresarya = $request->get('teleempresarya');
        $importadorarya->oferta = $request->get('oferta');

        $importadorarya->save();
        return redirect('/ImportadoraVentaRyA');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $importadorarya = ImportadoraVentaRyA::find($id);
        $importadorarya->delete();
        return redirect()-> back();
    }
}
