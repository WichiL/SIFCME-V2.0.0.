<?php

namespace App\Http\Controllers\Creditos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\DescripcionNegocio;
use DB;

class DescripcionesNegocio extends Controller
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
        DescripcionNegocio::create($request->all());       
        DB::commit();
        return;
    }

    public function show($id){
        return DescripcionNegocio::findOrFail($id);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
