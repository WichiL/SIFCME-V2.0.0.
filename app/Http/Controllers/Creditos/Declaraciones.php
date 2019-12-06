<?php

namespace App\Http\Controllers\Creditos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Declaracione;
use DB;
class Declaraciones extends Controller
{
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        Declaracione::create($request->all());       
        DB::commit();
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Declaracione::findOrFail($id);

    }
}