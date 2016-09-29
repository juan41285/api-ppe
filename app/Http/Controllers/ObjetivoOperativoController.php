<?php namespace App\Http\Controllers;

use App\ObjetivoOperativo;
use Illuminate\Http\Request;

class ObjetivoOperativoController extends Controller
{
    //
    public function index(){

    	$objetivos_operativos = ObjetivoOperativo::all();
        return $this->crearRespuesta($objetivos_operativos, 200);
    }
    //
    public function show($id)
	{
    	$objetivos_operativos =ObjetivoOperativo::find($id);
        if($objetivos_operativos)
        {
            
           return $this->crearRespuesta($objetivos_operativos, 200);      

        }

        return $this->crearRespuestaError('El Objetivo Operativo no existe', 404);
		
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        ObjetivoOperativo::create($request->all());

        return $this->crearRespuesta('Objetivo Operativo creado correctamente', 201);
    	
    }
    	//
    public function update(Request $request, $objetivo_operativo_id){

    	$objetivo_operativo = ObjetivoOperativo::find($objetivo_operativo_id);

        if($objetivo_operativo){
            $this->validacion($request);

            $nombre = $request->get('nombre');
            $descripcion = $request->get('descripcion');
            $objetivo_estrategico_id = $request->get('objetivo_estrategico_id');

            $objetivo_operativo->nombre =$nombre;
            $objetivo_operativo->descripcion =$descripcion;
            $objetivo_operativo->objetivo_estrategico_id =$objetivo_estrategico_id;

            $objetivo_operativo->save();

            return $this->crearRespuesta('El Objetivo Operativo fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El Objetivo Operativo que desea actualizar no existe', 404);

    }
    	//
    public function destroy($objetivo_operativo_id){

    	$objetivo_operativo = ObjetivoOperativo::find($objetivo_operativo_id);
        if($objetivo_operativo){

            $objetivo_operativo->delete();
            return $this->crearRespuesta('El Objetivo Operativo fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El Objetivo Operativo no pudo ser eliminado', 404);
    	
    }

    public function validacion($request){
        $reglas=
        [
            'nombre' => 'required',
            'descripcion' => 'required',
            'objetivo_estrategico_id' => 'required|numeric',
        ];

        $this->validate($request, $reglas);
    }

}
