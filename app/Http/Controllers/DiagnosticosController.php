<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diagnostico;

use Illuminate\Support\Facades\DB;

class DiagnosticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {


        $diagnostico= DB::table('diagnosticos')->paginate(25);

        return view('diagnostico.diagnostico')
        ->with('diagnosticos', $diagnostico);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnostico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diagnostico = new diagnostico();

        $diagnostico->id = $request->get('id');
        $diagnostico->repuesto = $request->get('repuesto');
        $diagnostico->escaneosglobal = $request->get('escaneosglobal');
        $diagnostico->evaluacionglobal = $request->get('evaluacionglobal');

        $diagnostico->save();
        return redirect('/diagnostico');
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
    public function edit($diagnostico)
    {
        $diagnostico = DB::table('diagnosticos')
             ->select('diagnosticos.*')->where('diagnosticos.id','=',$diagnostico)
             ->first();
             return view('diagnostico.edit')
             ->with('diagnosticos', $diagnostico);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $iddiagnostico)
    {
           $diagnosticos=diagnostico::find ($iddiagnostico);

        $diagnosticos->id = $request->get('id');
        $diagnosticos->repuesto = $request->get('repuesto');
        $diagnosticos->escaneosglobal = $request->get('escaneosglobal');
        $diagnosticos->evaluacionglobal = $request->get('evaluacionglobal');

        $diagnosticos->save();
        return redirect('/diagnostico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($iddiagnosticos)
    {
        $diagnosticos = diagnostico::find($iddiagnosticos);
        $diagnosticos->delete();

        return redirect ('/diagnostico');
    }





}
