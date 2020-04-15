<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
   
	protected $table="fabricantes";
	protected $fillable = array('nombre','direccion','telefono');
    protected $hidden = ['created_at','updated_at']; 
    
	public function aviones()
	{	
		return $this->hasMany('App\Avion');
	}
}
