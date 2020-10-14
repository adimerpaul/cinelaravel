<?php

namespace App\Http\Controllers;

use App\Models\Funcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return Funcion::
////            with('pelicula')
////            ->with('sala')
////            whereDate('fecha','=',now())
//            groupBy('idPelicula')
//            ->get();
        return DB::table('funcion')
            ->select('pelicula.idPelicula','pelicula.nombre','pelicula.imagen')
            ->join('pelicula', 'pelicula.Idpelicula', '=', 'funcion.idPelicula')
            ->groupBy('idPelicula','pelicula.nombre','pelicula.imagen')
            ->whereDate('fecha','=',now())
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funcion  $funcion
     * @return \Illuminate\Http\Response
     */
    public function show(Funcion $funcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funcion  $funcion
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcion $funcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Funcion  $funcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcion $funcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcion  $funcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcion $funcion)
    {
        //
    }
}
