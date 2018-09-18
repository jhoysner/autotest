<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{

    public function propietario()
    {
        return $this->belongsTo('App\Models\Propietario');
    }
}
