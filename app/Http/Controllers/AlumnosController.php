<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\alumnos;
use Exception;


class AlumnosController extends Controller
{
    public function get(){
        if(alumnos::all()->isEmpty()){
            return['No se encontraron alumnos'];
        }else{
            $alumnos1 = alumnos::all();
            return $alumnos1;
        }
    }

    public function store(Request $request){
        try{
            $alumnos1 = new alumnos();
            $alumnos1->nombres = $request->nombres;
            $alumnos1->apellidos = $request->apellidos;
            $alumnos1->sede = $request->sede;
            $alumnos1->carrera = $request->carrera;
            $alumnos1->semestre = $request->semestre;
            $alumnos1->carne = $request->carne;
            $alumnos1->Estado = 1;
            $alumnos1->save();
            return['Se ha guardado un nuevo alumno'];
        }catch(Exception $e){
            return['Se ha producido un error al guardar el alumno', $e];
        }
    }

    public function update(Request $request){
        try{
            $alumnos1 = alumnos::findOrfail($request->id);
            $alumnos1->nombres = $request->nombres;
            $alumnos1->apellidos = $request->apellidos;
            $alumnos1->sede = $request->sede;
            $alumnos1->carrera = $request->carrera;
            $alumnos1->semestre = $request->semestre;
            $alumnos1->carne = $request->carne;
            $alumnos1->save();
            return['Se ha actualizado el alumno'];
        }catch(Exception $e){
            return['Se ha producido un error al actualizar el alumno'];
        }
    }

    public function show(Request $request){
        $alumnos1 = alumnos::findOrfail($request->id);
        if($alumnos1){
            return $alumnos1;
        }else{
            return['No se encontraron datos'];
        }
    }

    public function state(Request $request){
        try{
            $alumnos1 = alumnos::findOrfail($request->id);
            $alumnos1->Estado = $request->Estado;
            $alumnos1->save();
            return['Se ha cambiado el estado del alumno '];
        }catch(Exception $e){
            return['Se ha producido un error al cambiar el estado del alumno'];
        }
    }
}
