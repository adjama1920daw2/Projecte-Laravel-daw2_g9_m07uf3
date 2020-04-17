<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('programas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = \DB::table('canals')->select('id','nomC')->get();
        return view('programas.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nomPrograma = new Programa([
            'nomP' => $request->get('nomP'),
            'descripcioP' => $request->get('descripcioP'),
            'tipusP'=>$request->get('tipusP'),
            'classificacioP'=>$request->get('classificacioP'),
            'idC'=>$request->get('idC'),

        ]);
        $nomPrograma->save();
        return redirect()->route('programaI');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     /*   $canal= Canal::all()->pluck('nomC','id');
        return view('programas.show', compact('programa','canal'));*/
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
