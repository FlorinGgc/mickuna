<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\automotorarepuesto;
use Illuminate\Support\Facades\DB;

class AutomotoraRepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automotorarepuestos= DB::table('automotorarepuesto')->paginate(25);

        return view('automotorarepuesto.automotorarepuesto')
        ->with('automotorarepuestos', $automotorarepuestos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automotorarepuesto.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $automotorarepuestos = new automotorarepuesto();

        $automotorarepuestos->id = $request->get('idautomotorarepuesto');
        $automotorarepuestos->cantidad = $request->get('cantidad');
        $automotorarepuestos->detalle = $request->get('detalle');
        $automotorarepuestos->direccion = $request->get('direccion');
        $automotorarepuestos->comunaregional = $request->get('comunaregional');
        $automotorarepuestos->fechaemision = $request->get('fechaemision');
        $automotorarepuestos->fechavencimiento = $request->get('fechavencimiento');
        $automotorarepuestos->trabajadorregionales = $request->get('trabajadorregionales');
        $automotorarepuestos->formapago = $request->get('formapago');
        $automotorarepuestos->unidad = $request->get('unidad');
        $automotorarepuestos->descuento = $request->get('descuento');
        $automotorarepuestos->ventaparciales = $request->get('vparciales');

        $automotorarepuestos->save();
        return redirect('/automotorarepuesto');

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
        $automotorarepuestos = DB::table('automotorarepuesto')
        ->select('automotorarepuesto.*')
        ->where('automotorarepuesto.id', '=', $id)
        ->first();

    return view('automotorarepuesto.edit')
    ->with('automotorarepuesto', $automotorarepuestos);
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
        $automotorarepuestos = automotorarepuesto::find($id);

        $automotorarepuestos->id = $request->get('idautomotorarepuesto');
        $automotorarepuestos->cantidad = $request->get('cantidad');
        $automotorarepuestos->detalle = $request->get('detalle');
        $automotorarepuestos->direccion = $request->get('direccion');
        $automotorarepuestos->comunaregional = $request->get('comunaregional');
        $automotorarepuestos->fechaemision = $request->get('fechaemision');
        $automotorarepuestos->fechavencimiento = $request->get('fechavencimiento');
        $automotorarepuestos->trabajadorregionales = $request->get('trabajadorregionales');
        $automotorarepuestos->formapago = $request->get('formapago');
        $automotorarepuestos->unidad = $request->get('unidad');
        $automotorarepuestos->descuento = $request->get('descuento');
        $automotorarepuestos->ventaparciales = $request->get('vparciales');

        $automotorarepuestos->save();
        return redirect('/automotorarepuesto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $automotorarepuestos = automotorarepuesto::find($id);
        $automotorarepuestos->delete();

        return redirect ('/automotorarepuesto');

    }
}
