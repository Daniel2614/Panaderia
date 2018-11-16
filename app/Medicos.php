<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicos extends Model
{
    protected $table = 'medicos';

    protected $fillable = [

    	'id',
    	'nombre',
    	'cedProfesional',
    	'especialidad',
    	

	];
}
