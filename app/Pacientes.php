<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [

    	'id',
    	'nombre',
    	'edad',
    	'nss',
    	'sintomas',
    	

	];
}
