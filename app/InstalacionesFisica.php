<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstalacionesFisica extends Model
{
    protected $fillable = [
        'id',
        'desIns',
        'monIns',
        'plaIns',
        'graIns',
        'destino_id'	
     ];   
}
