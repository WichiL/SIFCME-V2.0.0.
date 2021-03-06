<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidad;
use DB;


class Funciones extends Controller
{
    public function listarEstados(){

        $estados = DB::table('entidad')->pluck('name');
        return $estados;
    }

    public function listarMunicipios($name){
        $idEstado = DB::table('entidad')->select('entidad.id')->where('name', '=', $name)->get();
        $id = $idEstado->pluck('id');
        $municipios = DB::table('municipios')->select('municipios.name')->where('estado_id', '=', $id)->get();
        $municipios = $municipios->pluck('name');
        return $municipios;
    }   
}

