<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sucursales;


class SucursalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sucursales= DB::table('_sucursales')->paginate(25);

        return view('Sucursales.Sucursales')
        ->with('Sucursales', $Sucursales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sucursales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Sucursales = new Sucursales();

       $Sucursales->id = $request->get('id');
       $Sucursales->regionsurcusale = $request->get('regionsurcusale');
       $Sucursales->comuna = $request->get('comuna');
       $Sucursales->telefonosucursa = $request->get('telefonosucursa');


       $Sucursales->save();
       return redirect('/Sucursales');
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

        $Sucursales = DB::table('_sucursales')
        ->select('_sucursales.*')
        ->where('_sucursales.id','=',$id)
        ->first();

        return view('Sucursales.edit')
        ->with('Sucursale', $Sucursales);

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
        $Sucursales = Sucursales::find($id);

        $Sucursales->id = $request->get('id');
        $Sucursales->regionsurcusale = $request->get('regionsurcusale');
        $Sucursales->comuna = $request->get('comuna');
        $Sucursales->telefonosucursa = $request->get('telefonosucursa');

        $Sucursales->save();

        return redirect('/Sucursales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Sucursales = Sucursales::find($id);
        $Sucursales->delete();

        return redirect ('/Sucursales');
    }
}
