<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudios extends Model
{
    /protected $table = 'estudios';

    protected $fillable = [

    	'id',
    	'idEmpleado',
    	'idPaciente',
    	'nss',
    	'fecha',
    	'analisis',
    	'nombre'
    	

	];
}

