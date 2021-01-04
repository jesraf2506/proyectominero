<?php

namespace App;
use App\User;
use App\State;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

    //Relacion uno a uno
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion uno a uno con los estados
    public function state(){
        return $this->hasOne(State::class);
    }


    //relacion uno a muchos
    public function registro(){
        return $this->hasMany('App\Models\Registro');
    }

}
