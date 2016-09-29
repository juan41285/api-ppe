<?php namespace App\Http\Controllers;

use App\Indicador;
use Illuminate\Http\Request;

class IndicadoresController extends Controller
{
    //
    public function index(){

    	$indicadores = Indicador::all();
        return $this->crearRespuesta($indicadores, 200);
    }
    //
    public function show($id)
	{
    	$indicadores =Indicador::find($id);
        if($indicadores)
        {
            
           return $this->crearRespuesta($indicadores, 200);      

        }

        return $this->crearRespuestaError('El Indicador no existe', 404);
		
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Indicador::create($request->all());

        return $this->crearRespuesta('El Indicador fue creado correctamente', 201);
    	
    }
    	//
    public function update(Request $request, $indicador_id){

       	$indicador = Indicador::find($indicador_id);

        if($indicador){
            $this->validacion($request);

            $indicador_nombre = $request->get('indicador');
            $meta = $request->get('meta');
            $vigencia = $request->get('vigencia');
            $objetivo = $request->get('objetivo');
            $tipo = $request->get('tipo');

            $indicador->indicador =$indicador_nombre;
            $indicador->meta =$meta;
            $indicador->vigencia =$vigencia;
            $indicador->objetivo =$objetivo;
            $indicador->tipo =$tipo;

            $indicador->save();

            return $this->crearRespuesta('Indicador actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El Indicador que desea actualizar no existe', 404);

    }
    	//
    public function destroy($indicador_id){

    	$indicador = Indicador::find($indicador_id);
        if($indicador){

            $indicador->delete();
            return $this->crearRespuesta('El Indicador fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El Indicador no pudo ser eliminado', 404);
    	
    }
        //
    public function validacion($request){
        $reglas=
        [
            'indicador' => 'required',
            'meta' => 'required',
            'vigencia' => 'required',
            'objetivo' => 'required|numeric',
            'tipo' => 'required|numeric',
        ];

        $this->validate($request, $reglas);
    }

}
