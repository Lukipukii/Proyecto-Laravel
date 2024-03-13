<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;
use App\Models\Idioma;
use Illuminate\Support\Facades\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(7);
        $page = Request::get('page')??1;
        return view("alumnos.listado" , compact("alumnos" ,"page"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("alumnos.crear");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        $idiomasSeleccionados = $request->input('idioma', []);


        $valores = $request -> input();
        $alumno = new Alumno($valores);
        $alumno->save();
        foreach ($idiomasSeleccionados as $idioma){
            $datos = new Idioma();
            $datos->idioma = $idioma;
            $datos->alumno_id = $alumno->id;
            $datos->save();
        }

        $alumnos = Alumno::paginate(7);
        $page = $alumnos->lastPage();


        return redirect(route("alumnos.index",["page"=> $page]));



    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view ("alumnos.datos" , compact("alumno"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $page = Request::get("page");
        return view ("alumnos.editar" , compact("alumno" ,"page"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        $page =$request ->input('page');
        $datos_nuevos = $request ->input();
        $alumno->updateOrFail ($datos_nuevos );
        return redirect ("alumnos?page= $page");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return back();
    }
}
