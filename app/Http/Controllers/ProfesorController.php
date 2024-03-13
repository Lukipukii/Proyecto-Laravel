<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::all();
        return view("profesores.listado", ["profesores" => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("profesores.crear");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
        $validated = $request->input();
        $profesor = new Profesor($validated);
        $profesor->save();
        $request->session()->now('created', "$profesor->nombre $profesor->apellido ha sido añadido exitosamente");
        $profesores = Profesor::all();
        return view("profesores.listado", ["profesores" => $profesores]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        return view("profesores.editar", compact("profesor"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {
        $profesor->update($request->input());
        $request->session()->now('updated', "$profesor->nombre $profesor->apellido ha sido editado");
        $profesores = Profesor::all();
        return view("profesores.listado", ["profesores"=> $profesores]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        session()->flash('deleted', "$profesor->nombre $profesor->apellido ha sido eliminado/a");
        $profesores = Profesor::all();
        return view("profesores.listado", ["profesores" => $profesores]);
    }
}
