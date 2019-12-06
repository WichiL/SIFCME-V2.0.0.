<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapitalTrabajo extends Model
{
    protected $fillable = [
        'id',
        'desCap',
        'monCap',
        'plaCap',
        'destino_id'	
     ];        
}
