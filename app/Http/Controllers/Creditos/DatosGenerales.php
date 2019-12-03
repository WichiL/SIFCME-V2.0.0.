<?php

namespace App\Http\Controllers\Creditos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Solicitude;
use App\InformacionBancaria;
use App\InformacionContacto;
use App\DomicilioParticular;
use App\DomicilioNegocio;
use App\JustificacionDestino;
use App\User;
Use App\DatosGenerale;
use DB;

class DatosGenerales extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DatosGenerale::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return [`message`=> `ENTRE`];
        // $rules = [
        //     //STEP1
        //     'nomSolicitante' => 'required|string|max:191',
        //     'fecNacimiento' => 'required|string||max:20',
        //     'lugNacimiento' => 'required|string|max:20',
        //     'edad' => 'required|string|numeric|max:99',
        //     'sexo' => 'required|string|max:10|alpha',
        //     'estCivil' => 'required|string|max:20',
        //     'curp' => 'required',
        //     'rfc' => 'required',
        //     //STEP2
        //     'tipCuenta' => 'required|string|max:12',
        //     'numCuenta' => 'required|string|max:19',
        //     'banco' => 'required|string|max:19',
        //     'clbInterbancaria' => 'required|string|max:22',
        //     'plaza' => 'required|string|max:191',
        //     'sucursal' => 'required|string|max:191',
        //     'ubicacion' => 'required|string|max:191',
        //     //STEP3
        //     'email' => 'required|string|max:191',
        //     'facTwitter' => 'required|string|max:191',
        //     'telNegocio' => 'required|string|max:191',
        //     'telParticular' => 'required|string|max:191',
        //     'telCelular' => 'required|string|max:191',
        //     'telRecados' => 'required|string|max:191',
        //     //STEP4
        //     'calNumPar' => 'required|string|max:191',
        //     'colParticular' => 'required|string|max:191',
        //     'munParticular' => 'required|string|max:191',
        //     'cpParticular' => 'required|string|max:191',
        //     'tipVivParticular' => 'required|string|max:191',
        //     'antLocParticular' => 'required|string|max:191',
        //     'antDomActualPar' => 'required|string|max:191',
        //     'tipDomParticular' => 'required|string|max:191',
        //     'valProParticular' => 'required|numeric',
        //     //STEP5
        //     'calNumNegocio' => 'required|string|max:191',
        //     'colNegocio' => 'required|string|max:191',
        //     'munNegocio' => 'required|string|max:191',
        //     'cpNegocio' => 'required|string|max:191',
        //     'domFiscal' => 'required|string|max:191',
        //     'sector' => 'required|string|max:191',
        //     'actEmpresarial' => 'required|string|max:191',
        //     'proOfrece' => 'required|string|max:191',
        //     'expEmpresario' => 'required|string|max:191',
        //     'expActividad' => 'required|string|max:191',
        //     'iniOperaciones' => 'required|string|max:191',
        //     'supNegocio' => 'required|numeric',
        //     'perteneceA' => 'required|string|max:191',
        //     //STEP6
        //     'justCredito' => 'required|string|max:191',
        //     'capTrabajo' => 'required|string|max:191',
        //     'monto' => 'required|numeric',
        //     'plazo' => 'required|string|max:191'
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
        // $this->validate($request, $rules, $messages);
        DB::beginTransaction();
        Solicitude::create($request->all());
        DatosGenerale::create($request->all());
        InformacionBancaria::create($request->all());
        InformacionContacto::create($request->all());
        DomicilioParticular::create($request->all());
        DomicilioNegocio::create($request->all());
        JustificacionDestino::create($request->all());
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
//         select <columnsOfInterest> 
//   from product_catalogue 
//   join products
//     on product_catalogue.catalogueid = products.catalogueid 
//  where products.productid = 1

        // $query = "SELECT * from datos_generales, información_bancaria where id="+$id;

        // $result = DB::select($query);

        // return $result;

        // return DB::table('datos_generales')
        // ->join('Informacion_bancaria as IB')->where('datos_generales.id', '=', $id);
        return DatosGenerale::findOrFail($id);
        // // return DatosGenerale::paginate(10);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        DB::beginTransaction();
        $datG = DatosGenerales::findOrFail($id);
        $infB = InformacionBancaria::findOrFail($id);
        $infC = InformacionContacto::findOrFail($id);
        $domP = DomicilioParticular::findOrFail($id);
        $domN = DomicilioNegocio::findOrFail($id);
        $jusD = JustificacionDestino::findOrFail($id);
        
        $jusD->delete();
        $domN ->delete();
        $domP ->delete();
        $infC ->delete();
        $infB ->delete();
        $datG->delete();
        DB::commit();
    }
}
