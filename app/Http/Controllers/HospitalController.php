<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudios;
use App\Medicos;
use App\Pacientes;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalActivo = Persona::where('status', '=', 2)->with('altaReciente')->get();
        $personalInactivo = Persona::where('status', '=', 0)->with('bajaReciente')->get();
        $personasRegistradas = Persona::orderBy('id','desc')->where('status', '=', 1)->get();
        $datlaborales =  new Datlaborales;
        $ctrabajo = new Ctrabajo;
       
        $municipios = CatMunicipioCtrab::all()->pluck('municipio', 'id');
        $puesto    = CatPuestos::all()->pluck('puesto', 'id');
        $unidades   = CatUnidadAdscripcion::all()->pluck('unidadads', 'id');
        $catsindicatos   = CatSindicatos::all()->pluck('denominacion', 'id');
        $catrabajo  = CentroTrab::all()->pluck('descripcionCT','id');

        $altas = Altas::all();

        return view('persona.index',['personalActivo' => $personalActivo, 'personalInactivo' => $personalInactivo, 'personasRegistradas' => $personasRegistradas, 'datlaborales'=>$datlaborales, 'puesto'=>$puesto, 'unidades'=>$unidades, 'municipios'=>$municipios, 'catsindicatos'=>$catsindicatos, 'catrabajo'=>$catrabajo, 'altas'=>$altas])
                            ->with(['page'     => 'personaindex']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persona = new Persona();
        return view ('persona.create', ['personas' => $persona])
                        ->with(['page' => 'personaindex']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
