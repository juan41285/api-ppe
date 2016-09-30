<?php namespace App\Http\Controllers;

use App\ProyectoIndicador;
use Illuminate\Http\Request;

class ProyectoIndicadorController extends Controller
{
    //
    public function index(){

    	$proyecto_indicador = ProyectoIndicador::all();
        return $this->crearRespuesta($proyecto_indicador, 200);
    }
    //
    public function show($id)	{
		$proyecto_indicador =ProyectoIndicador::find($id);
        if($proyecto_indicador)
        {
            
           return $this->crearRespuesta($proyecto_indicador, 200);      

        }

        return $this->crearRespuestaError('El indcador del proyecto no existe', 404);
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Usuario::create($request->all());

        return $this->crearRespuesta('El indcador del proyecto fue creado correctamente', 201);
    }
    	//
    public function update(Request $request, $proyecto_indicador_id){

    	$proyecto_indicador = ProyectoIndicador::find($proyecto_indicador_id);

        if($proyecto_indicador){
            $this->validacion($request);

           
           
            $proyecto_id = $request->get('proyecto_id');
            $indicador_id = $request->get('indicador_id');
           
           

          
            $proyecto_indicador->proyecto_id =$proyecto_id;
            $proyecto_indicador->indicador_id =$indicador_id;
            
            

            $proyecto_indicador->save();

            return $this->crearRespuesta('El indcador del proyecto fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El indcador del proyecto que desea actualizar no existe', 404);
    }
    	//
    public function destroy($proyecto_indicador_id){

    	$proyecto_indicador = Usuario::find($proyecto_indicador_id);
        if($proyecto_indicador){

            $proyecto_indicador->delete();
            return $this->crearRespuesta('El indcador del proyecto fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El indcador del proyecto no pudo ser eliminado', 404);
    }
        //
    public function validacion($request){
        $reglas=
        [
            
            'proyecto_id' => 'required',
            'indicador_id' => 'required',
            
        ];

        $this->validate($request, $reglas);
    }

}
