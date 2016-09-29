<?php namespace App\Http\Controllers;

use App\ObjetivoEstrategico; 
use Illuminate\Http\Request;

class ObjetivoEstrategicoController extends Controller
{
    //
    public function index(){

    	$objetivos_estrategicos = ObjetivoEstrategico::all();
        return $this->crearRespuesta($objetivos_estrategicos, 200);
    }
    //
    public function show($id)
	{
    	$objetivos_estrategicos =ObjetivoEstrategico::find($id);
        if($objetivos_estrategicos)
        {
            
           return $this->crearRespuesta($objetivos_estrategicos, 200);      

        }

        return $this->crearRespuestaError('El Objetivo Estratégico no existe', 404);
		
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        ObjetivoEstrategico::create($request->all());

        return $this->crearRespuesta('Objetivo Estratégico creado correctamente', 201);
    	
    }
    	//
    public function update(Request $request, $objetivo_estrategico_id){

    	$objetivo_estrategico = ObjetivoEstrategico::find($objetivo_estrategico_id);

        if($objetivo_estrategico){
            $this->validacion($request);

            $nombre = $request->get('nombre');
            $descripcion = $request->get('descripcion');
            $eje_id = $request->get('eje_id');

            $objetivo_estrategico->nombre =$nombre;
            $objetivo_estrategico->descripcion =$descripcion;
            $objetivo_estrategico->eje_id =$eje_id;

            $objetivo_estrategico->save();

            return $this->crearRespuesta('El Objetivo Estratégico fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El Objetivo Estratégico que desea actualizar no existe', 404);

    }
    	//
    public function destroy($objetivo_estrategico_id){

    	$objetivo_estrategico = ObjetivoEstrategico::find($objetivo_estrategico_id);
        if($objetivo_estrategico){

            $objetivo_estrategico->delete();
            return $this->crearRespuesta('El Objetivo Estratégico fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El Objetivo Estratégico no pudo ser eliminado', 404);
    	
    }
        //
    public function validacion($request){
        $reglas=
        [
            'nombre' => 'required',
            'descripcion' => 'required',
            'eje_id' => 'required|numeric',
        ];

        $this->validate($request, $reglas);
    }

}
