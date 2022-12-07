<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ControladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $insectos = DB::table('insecto')->get();
        return view("Tabla", compact('insectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Formulario");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('insecto')->insert([
            'insecto' => $request['txtInsecto'],
            'tipo' => $request['txtTipo'],
        ]);
        return redirect('insecto/create')->with('confirmacion', 'Insecto creado');
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
        $insecto = DB::table('insecto')->where('id', '=', $id)->get();
        return view('FormularioEditar', compact('insecto'));
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
        DB::table('insecto')->where('id', '=', $id)->update([
            'insecto' => $request['txtInsecto'],
            'tipo' => $request['txtTipo'],
        ]);
        return redirect('insecto/edit/'.$id)->with('confirmacion', 'Insecto modificado');
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
