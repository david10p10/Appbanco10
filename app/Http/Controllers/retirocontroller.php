<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\retiro;
use App\Models\afiliado;
use App\Models\empleado;
class retirocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id,string $id2)
    {
        //
        return view('retiros.create')->with('id',$id)->with('id2',$id2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,string $id2)
    {
        //

        $afiliado=afiliado::find($id);
        $empleado=empleado::find($id2);
        $retiros=retiro::all();
        return view ('retiros.index2')->with ('retiros',$retiros)
                                      ->with  ('afiliado',$afiliado)
                                      ->with  ('empleado',$empleado);


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
