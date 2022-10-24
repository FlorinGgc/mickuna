<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente= DB::table('clientes')->paginate(25);

        return view('cliente.cliente')
        ->with('cliente', $cliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cliente.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();

        $clientes -> id = $request->get('idclientes');
        $clientes -> nombreclientes = $request->get('nombreclientes');
        $clientes -> marca = $request->get('marca');
        $clientes -> patente = $request->get('patente');
        $clientes -> ano = $request->get('ano');
        $clientes -> km = $request->get('km');
        $clientes -> marcabencina = $request->get('marcabencina');
        $clientes -> modelo = $request->get('modelo');
        $clientes -> fechacontrato = $request->get('fechacontrato');
        $clientes -> fechaentrada = $request->get('fechaentrada');

        $clientes->save();
        return redirect('/cliente');


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
        $clientes = DB::table('clientes')
        ->select('cliente.*')
        ->where('clientes.id', '=', $id)
        ->first();

    return view('cliente.edit')
    ->with('cliente', $clientes);
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
        $clientes = Cliente::find($id);

        $clientes->id = $request->get('idclientes');
        $clientes->nombreclientes = $request->get('nombreclientes');
        $clientes->marca = $request->get('marca');
        $clientes->patente = $request->get('patente');
        $clientes->ano = $request->get('ano');
        $clientes->km = $request->get('km');
        $clientes->marcabencina = $request->get('marcabencina');
        $clientes->modelo = $request->get('modelo');
        $clientes->fechacontrato = $request->get('fechacontrato');
        $clientes->fechaentrada = $request->get('fechaentrada');

        $clientes->save();
        return redirect('/cliente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = cliente::find($id);
        $clientes->delete();

        return redirect ('/cliente');
    }
}
