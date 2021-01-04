<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //Relacion uno a muchos
    public function equipos(){
        return $this->hasMany('App\Models\Equipo');
    }
}
