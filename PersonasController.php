<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Persona;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        
        //dd($personas);

        return view('welcome', compact('personas'));
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
    public function store(Request $request) {

        //Modelo
        $persona = new Persona;

        //el atrbuto va como esta en la base de datos
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->edad = $request->input('edad');

        $persona->save();

        return ($persona->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $persona = Persona::find($id);

        return view('welcomeid', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit() {
        $personas = Persona::all();

        return view('edit', compact('personas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        
        //Modelo
        $persona = Persona::find( $request->input('id') );

        //el atributo va como esta en la base de datos
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->edad = $request->input('edad');

        $persona->save();

        return response()->json([
            'status' => 'OOOK'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {

        $persona = Persona::find($request->input('id'));
        $persona->delete();

        // table('persona')->where('id', '==', $id)->delete();

        return response()->json([
            'status' => 'OOOK'
        ]);
    }
}
