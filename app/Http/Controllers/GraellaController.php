<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Graella;
use App\Programa;
use App\Canal;
class GraellaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas= Programa::all();
        $graellas= Graella::all();
        $canals = Canal::all();
        return view('graellas.index', compact('programas','graellas','canals'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idCanal = \DB::table('canals')->select('id', 'nomC')->get();
        $idPrograma = \DB::table('programas')->select('id', 'nomP')->get();
        return view('graellas.create', compact('idCanal','idPrograma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nomGraella = new Graella([
            'horaG' => $request->get('horaG'),
            'diaG' => $request->get('diaG'),
        ]);
        $nomGraella->save();
        $nomGraella ->programes()->attach($request->idP);
        return redirect()->route('graellaI');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
