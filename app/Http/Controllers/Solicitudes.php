<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Solicitude;
use DB;

class Solicitudes extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Solicitude::create($request->all());
    }

    public function index(){
        $res = Solicitude::orderBy('updated_at', 'DESC')->first();

        return $res;
    }
}
