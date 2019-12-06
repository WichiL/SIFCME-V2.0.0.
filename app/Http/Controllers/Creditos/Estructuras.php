<?php

namespace App\Http\Controllers\Creditos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Estructura;
use App\ManifestacionAval;
use App\CreditosAnteriore;
use App\Negocio;
use App\Referencia;
use App\User;
use DB;


class Estructuras extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $rules = [
        //     //STEP1
        //     'recPropios' => 'required',
        //     'recFondoPlata' => 'required',
        //     'invTotal' => 'required',

        //     // REFERENCIAS
        //     'nom1' => 'required|string',
        //     'perContactar1' => 'required|string',
        //     'ubicacion1' => 'required|string',
        //     'tel1' => 'required|string',
        //     'relacion1' => 'required|string',
        //     'limCredito1' => 'required',
        //     'yrsRelacion1' => 'required|string',
        //     'nom2' => 'required|string',
        //     'perContactar2' => 'required|string',
        //     'ubicacion2' => 'required|string',
        //     'tel2' => 'required|string',
        //     'relacion2' => 'required|string',
        //     'limCredito2' => 'required',
        //     'yrsRelacion2' => 'required|string',
        //     'nom3' => 'required|string',
        //     'perContactar3' => 'required|string',
        //     'ubicacion3' => 'required|string',
        //     'tel3' => 'required|string',
        //     'relacion3' => 'required|string',
        //     'limCredito3' => 'required',
        //     'yrsRelacion3' => 'required|string',

        // // NEGOCIO
        //     'diasLaborales' => 'required|string',
        //     'atiende' => 'required|string',
        //     'abren' => 'required|string',
        //     'cierran' => 'required|string',
        //     'frente' => 'required|string',
        //     'lado' => 'required|string',
        //     'ubicacion' => 'required|string',
        //     'color' => 'required|string',
        //     'señalamiento' => 'required|string',

        // // //CREDITOSANTERIORES
        // //     'nomCredito1' => 'required|string',
        // //     'montoCredito1' => 'required',
        // //     'saldoActual1' => 'required',
        // //     'pago1' => 'required',
        // //     'mensual1' => 'required',
        // //     'yr1' => 'required|string',
            
        // //MANIFESTACION AVAL
        //     'nomAval' => 'required|string',
        //     'estCivilAval' => 'required|string',
        //     'avalAnterior' => 'required|string',
        //     'domAval' => 'required|string',
        //     'munAval' => 'required|string',
        //     'cpAval' => 'required|string',
        //     'telAval' => 'required|string',
        //     'parentesco' => 'required|string',
        //     'valPatrimonio' => 'required',
        //     'consPropiedad' => 'required|string',
        //     'numRegistro' => 'required|string',
        //     'folio' => 'required|string',
        //     'vol' => 'required|string',
        //     'secc' => 'required|string',
        //     'fecInscripcion' => 'required|string',
        //     'domPropiedad' => 'required|string',
        //     'munPropiedad' => 'required|string',
        //     'cpPropiedad' => 'required|string',
            
            
        // ];
        // $messages = [
        //     'nomSolicitante.required' => 'Este campo es obligatorio',
        //     'nomSolicitante.max' => 'Solo se admiten 191 caracteres',
        //     'nomSolicitante.alpha' => 'Solo se admiten letras',
        //     'fecNacimiento.required' => 'Este campo es obligatorio',
        //     'lugNacimiento.required' => 'Este campo es obligatorio',
        //     'lugNacimiento.max' => 'Solo se admiten 20 caracteres',
        //     'edad.required' => 'Este campo es obligatorio',
        //     'edad.numeric' => 'Solo se admiten números',
        //     'edad.max' => 'La edad máxima válida es 99',
        //     'sexo.required' => 'Este campo es obligatorio',
        //     'sexo.max' => 'Solo se admiten 10 caracteres',
        //     'estCivil.required' => 'Este campo es obligatorio',
        //     'estCivil.max' => 'Solo se admiten 20 caracteres',
        //     'curp.required' => 'Este campo es obligatorio',
        //     // 'curp.max' => 'Solo se admiten 20 caracteres',
        //     'rfc.required' => 'Este campo es obligatorio',
        //     'tipCuenta.required' => 'Este campo es obligatorio',
        //     'tipCuenta.max' => 'Solo se admiten 12 caracteres',
        //     'numCuenta.required' => 'Este campo es obligatorio',
        //     'numCuenta.max' => 'Solo se admiten 19 caracteres',
        //     'banco.required' => 'Este campo es obligatorio',
        //     'banco.max' => 'Solo se admiten 19 caracteres',
        //     'clbInterbancaria.required' => 'Este campo es obligatorio',
        //     'clbInterbancaria.max' => 'Solo se admiten 19 caracteres',
        //     'plaza.required' => 'Este campo es obligatorio',
        //     'plaza.max' => 'Solo se admiten 191 caracteres',
        //     'sucursal.required' => 'Este campo es obligatorio',
        //     'sucursal.max' => 'Solo se admiten 191 caracteres',
        //     'ubicacion.required' => 'Este campo es obligatorio',
        //     'ubicacion.max' => 'Solo se admiten 191 caracteres',
        // ];
        // $this->validate($request, $rules);
        DB::beginTransaction();
        Estructura::create($request->all());
        ManifestacionAval::create($request->all());
        Negocio::create($request->all());
        Referencia::create($request->all());
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
        return Estructura::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
