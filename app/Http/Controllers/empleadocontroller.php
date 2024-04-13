<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\edit;
class Empleadocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleado=Empleado::all();
        return view('empleado.index')->with ('empleado',$empleado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado=new Empleado();
        $empleado->codempleado=$request->get('codempleado');
        $empleado->nombre=$request->get('mombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->nivel=$request->get('nivel');
        $empleado->telefono=$request->get('telefono');
        $empleado->save();
        return redirect ('/empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
