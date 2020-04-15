<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    protected $table='aviones';   
    protected $primaryKey = 'serie';
    
    protected $fillable = array('modelo','longitud','capacidad','velocidad','alcance');
    protected $hidden = ['created_at','updated_at'];


    public function fabricante()
    {
        return $this->belongsTo('App\Fabricante');
    }
}

