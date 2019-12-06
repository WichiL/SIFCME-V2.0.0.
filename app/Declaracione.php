<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Declaracione extends Model
{
    protected $fillable = [
        'id',
        'fecCierre',
        'solicitud_id',
        'efeCaja',
        'salBancos',
        'cueCobrar',
        'valInventarios',
        'totEfectivo',
        'inmSolicitante1',
        'inmSolicitante2',
        'valInmueble1',
        'valInmueble2',
        'totInmuebles',
        'maqSolicitante1',
        'maqSolicitante2',
        'maqSolicitante3',
        'maqSolicitante4',
        'maqSolicitante5',
        'maqSolicitante6',
        'valMaquina1',
        'valMaquina2',
        'valMaquina3',
        'valMaquina4',
        'valMaquina5',
        'valMaquina6',
        'totMaquinaria',
        'carSolicitante1',
        'carSolicitante2',
        'valCarro1',
        'valCarro2',
        'totCarros',
        'totInstalacion',
        'totFijo',
        'actTotal',
        'pasTotal',
     ]; 
}
