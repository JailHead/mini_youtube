<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Muestra todos los registros de la tabla
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Abre el formulario  para captura
        return view ('video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Guarda el registro
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Muestra registros por ID
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Abre el formulario con la informacion de un registro especifico
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Guarda una actualizacion de un registro especifico
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Borra fisicamente un registro
    }
}
