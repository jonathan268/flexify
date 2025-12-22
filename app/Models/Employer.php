<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public function departement(){
        return $this->belongsTo(Departement::class);
    }

    public function salaires(){
        return $this->hasMany(Salaire::class);
    }
}
