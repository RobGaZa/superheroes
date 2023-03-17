<?php

namespace App\Http\Controllers;

use App\Models\Superheroes;
use Illuminate\Http\Request;

class SuperheroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index", [
            'superheroes' => Superheroes::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Superheroes $superheroe)
    {
        return view("create", [
            'superheroe' => $superheroe
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Superheroes::create([
            'nombre_de_superheroe' => $request->nombre_de_superheroe,
            'nombre_real' => $request->nombre_real,
            'foto' => $request->foto,
            'informacion_adicional' => $request->informacion_adicional
        ]);

        return redirect()->route('superheroes.index');

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
    public function edit(Superheroes $superhero)
    {
        return view("edit", [
            'superheroe' => $superhero
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Superheroes $superhero)
    {
        Superheroes::whereId($superhero->id)->update([
            'nombre_de_superheroe' => $request->nombre_de_superheroe,
            'nombre_real' => $request->nombre_real,
            'foto' => $request->foto,
            'informacion_adicional' => $request->informacion_adicional,
        ]);

        return redirect()->route('superheroes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Superheroes $superhero)
    {
        $superhero->delete();

        return redirect()->route('superheroes.index');
    }
}
