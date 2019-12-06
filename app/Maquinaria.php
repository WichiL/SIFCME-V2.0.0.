<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    protected $fillable = [
        'id',
        'desMaq',
        'monMaq',
        'plaMaq',
        'graMaq',
        'destino_id'	
     ];  
}
