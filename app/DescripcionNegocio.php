<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescripcionNegocio extends Model
{
    protected $fillable = [
        'id',
        'historia',
        'solicitud_id',
        'actMuj',
        'actHom',
        'genMuje',
        'genHom',
        'nomina',
        'salario',
        'upNomina',
        'incremento',
        'porque',	
     ]; 	
}
