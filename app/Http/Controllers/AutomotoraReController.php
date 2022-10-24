<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\automotoraregional;
use Illuminate\Support\Facades\DB;


class AutomotoraReController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $automotoraregional= DB::table('automotoraRegional')->paginate(25);

        return view('automotoraregional.automotoraregional')
        ->with('automotoraregionales', $automotoraregional);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('automotoraregional.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $automotoraregional = new automotoraregional();

        $automotoraregional->idautomotoraregional = $request->get('idautomotoraregional');
        $automotoraregional->detalles = $request->get('detalles');
        $automotoraregional->direccionEmpresa = $request->get('direccionempresa');
        $automotoraregional->tipoPago = $request->get('tipopago');

        $automotoraregional->save();
        return redirect('/automotoraregional');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $automotoraregional= DB::table('automotoraRegional')->paginate(25);

        return view('automotoraregional.automotoraregional')
        ->with('automotoraregionales', $automotoraregional);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $AutomotoraRegional = DB::table('automotoraRegional')
             ->select('automotoraregional.*')
             ->where('automotoraregional.id', '=', $id);


         return view('automotoraregional.edit')
         ->with('AutomotoraRegional', $id);
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
        $automotoraregional = automotoraregional::find($id);

        $automotoraregional->id = $request->get('id');
        $automotoraregional->detalles = $request->get('detalles');
        $automotoraregional->direccionempresa = $request->get('direccionempresa');
        $automotoraregional->tipopago = $request->get('tipopago');

        $automotoraregional->save();
        return redirect('/automotoraregional');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $AutomotoraRegional = automotoraregional::find($id);
        $AutomotoraRegional->Delete();
        return redirect ('/AutomotoraRegional');
    }
}
