<?php

namespace App\Http\Controllers;

use App\Models\Empresanacional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresanacionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresanacional= DB::table('empresanacionals')->paginate(25);

        return view('EmpresaNacional.empresanacional')
        ->with('empresanacionales', $empresanacional);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EmpresaNacional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresanacional = new Empresanacional();

        $empresanacional->id = $request->get('id');
        $empresanacional->ventaproducto = $request->get('ventaproducto');
        $empresanacional->ventaaccesorios = $request->get('ventaaccesorios');
        $empresanacional->ventarepuesto = $request->get('ventarepuesto');
        $empresanacional->cantidadproducto = $request->get('cantidadproducto');
        $empresanacional->cantidadpyr = $request->get('cantidadpyr');
        $empresanacional->cantidadaccesorio = $request->get('cantidadaccesorio');


        $empresanacional->save();
        return redirect('/EmpresaNacional');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresanacional  $empresanacional
     * @return \Illuminate\Http\Response
     */
    public function show(Empresanacional $empresanacional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresanacional  $empresanacional
     * @return \Illuminate\Http\Response
     */
    public function edit($empresanacional)
    {
        $empresa = DB::table('empresanacionals')
        ->select('empresanacionals.*','empresanacionals.id')
        ->where('empresanacionals.id', '=', $empresanacional)
        ->first();

    return view('Empresanacional.edit')
    ->with('EmpresaNacional', $empresa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresanacional  $empresanacional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresanacional $empresanacional)
    {
        $empresanacional = new Empresanacional();

        $empresanacional->id = $request->get('id');
        $empresanacional->ventaproducto = $request->get('ventaproducto');
        $empresanacional->ventaaccesorios = $request->get('ventaaccesorios');
        $empresanacional->ventarepuesto = $request->get('ventarepuesto');
        $empresanacional->cantidadproducto = $request->get('cantidadproducto');
        $empresanacional->cantidadpyr = $request->get('cantidadpyr');
        $empresanacional->cantidadaccesorio = $request->get('cantidadaccesorio');

        $empresanacional->save();
        return redirect('/EmpresaNacional');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresanacional  $empresanacional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresanacional = Empresanacional::find($id);
        $empresanacional->delete();

        return redirect ('/EmpresaNacional');
    }
}
