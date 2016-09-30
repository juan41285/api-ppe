<?php namespace App\Http\Controllers;

use App\Prioridad;
use Illuminate\Http\Request;

class PrioridadController extends Controller
{
    //
    public function index(){

    	$prioridad = Prioridad::all();
        return $this->crearRespuesta($prioridad, 200);
    }
    //
    public function show($id)	{
		$prioridad =Prioridad::find($id);
        if($prioridad)
        {
            
           return $this->crearRespuesta($prioridad, 200);      

        }

        return $this->crearRespuestaError('Prioridad  no existe', 404);
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Usuario::create($request->all());

        return $this->crearRespuesta('Prioridad  fue creado correctamente', 201);
    }
    	//
    public function update(Request $request, $prioridad_id){

    	$prioridad = Prioridad::find($prioridad_id);

        if($prioridad){
            $this->validacion($request);

           
           
            $nombre = $request->get('nombre');
            $valor = $request->get('valor');
           
           

          
            $prioridad->nombre =$nombre;
            $prioridad->valor =$valor;
            
            

            $prioridad->save();

            return $this->crearRespuesta('Prioridad  fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('Prioridad  que desea actualizar no existe', 404);
    }
    	//
    public function destroy($prioridad_id){

    	$prioridad = Usuario::find($prioridad_id);
        if($prioridad){

            $prioridad->delete();
            return $this->crearRespuesta('Prioridad  fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('Prioridad  no pudo ser eliminado', 404);
    }
        //
    public function validacion($request){
        $reglas=
        [
            
            'nombre' => 'required',
            'valor' => 'required',
            
        ];

        $this->validate($request, $reglas);
    }

}
