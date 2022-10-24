<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\EmpresaResiduosindustriales;

use Illuminate\Http\Request;

class empresaresiduosinducontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresaresiduo= DB::table('empresaresiduosindu')->paginate(25);

        return view('empresaresiduo.empresaresiduoindustriales')
        ->with('empresaresiduoindustriales', $empresaresiduo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EmpresaResiduosIndustriales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresaresiduo = new EmpresaResiduosindustriales();

        $empresaresiduo->id = $request->get('id');
        $empresaresiduo->cantidadfiltro = $request->get('cantidadfiltro');
        $empresaresiduo->nombrefiltro = $request->get('nombrefiltro');
        $empresaresiduo->nombrequimico = $request->get('nombrequimico');
        $empresaresiduo->tipobencina = $request->get('tipobencina');
        $empresaresiduo->nombrevendedor = $request->get('nombrevendedor');
        $empresaresiduo->correo = $request->get('correo');
        $empresaresiduo->telefono = $request->get('telefono');
        $empresaresiduo->cantidadLtaceite = $request->get('cantidadLtaceite');

        $empresaresiduo->save();
        return redirect('/EmpresaResiduosindustriales');
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
        $empresaresiduo = DB::table('empresaresiduosindu')
        ->select('empresaresiduo.*','empresaresiduosindu.id')
        ->where('empresaresiduosindu.id', '=', '$empresaresiduo')
        ->first();

         return view('EmpresaResiduosIndustriales.edit')
         ->with('empresaresiduosindu', $empresaresiduo);
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
        $empresaresiduo = new EmpresaResiduosindustriales();

        $empresaresiduo->id = $request->get('id');
        $empresaresiduo->ventaproducto = $request->get('ventaproducto');
        $empresaresiduo->ventaaccesorios = $request->get('ventaaccesorios');
        $empresaresiduo->ventarepuesto = $request->get('ventarepuesto');
        $empresaresiduo->cantidadproducto = $request->get('cantidadproducto');
        $empresaresiduo->cantidadpyr = $request->get('cantidadpyr');
        $empresaresiduo->cantidadaccesorio = $request->get('cantidadaccesorio');


        $empresaresiduo->save();
        return redirect('/EmpresaResiduosindustriales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresaresiduo = EmpresaResiduosindustriales::find($id);
        $empresaresiduo->delete();

        return redirect ('/EmpresaResiduosindustriales

        ');
    }
}
