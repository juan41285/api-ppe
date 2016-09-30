<?php namespace App\Http\Controllers;

use App\Accion;
use Illuminate\Http\Request;

class AccionController extends Controller
{
    //
    public function index(){

    	$accion = Accion::all();
        return $this->crearRespuesta($accion, 200);
    }
    //
    public function show($id)	{
		$accion =Accion::find($id);
        if($accion)
        {
            
           return $this->crearRespuesta($accion, 200);      

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
    public function update(Request $request, $accion_id){

    	$accion = Accion::find($accion_id);

        if($accion){
            $this->validacion($request);

           
           
            $nombre = $request->get('nombre');
            $fecha_inicio = $request->get('fecha_inicio');
            $fecha_fin = $request->get('fecha_fin');
            $prioridad = $request->get('prioridad');
            $estado = $request->get('estado');
            $detalle = $request->get('detalle');
            $direccion_id = $request->get('direccion_id');
           
           

          
            $accion->nombre =$nombre;
            $accion->fecha_inicio =$fecha_inicio;
            $accion->fecha_fin =$fecha_fin;
            $accion->prioridad =$prioridad;
            $accion->estado =$estado;
            $accion->detalle =$detalle;
            $accion->direccion_id =$direccion_id;




            
            

            $accion->save();

            return $this->crearRespuesta('El indcador del proyecto fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El indcador del proyecto que desea actualizar no existe', 404);
    }
    	//
    public function destroy($accion_id){

    	$accion = Usuario::find($accion_id);
        if($accion){

            $accion->delete();
            return $this->crearRespuesta('El indcador del proyecto fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El indcador del proyecto no pudo ser eliminado', 404);
    }
        //
    public function validacion($request){
        $reglas=
        [
            
            'nombre' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'prioridad' => 'required',
            'estado' => 'required',
            'detalle' => 'required',
            'direccion_id' => 'required',
            
        ];

        $this->validate($request, $reglas);
    }

}
