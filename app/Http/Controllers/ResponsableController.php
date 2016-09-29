<?php namespace App\Http\Controllers;

use App\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    //
    public function index(){

    	$responsables = Responsable::all();
        return $this->crearRespuesta($responsables, 200);
    }
    //
    public function show($id)
	{
    	$responsables =Responsable::find($id);
        if($responsables)
        {
            
           return $this->crearRespuesta($responsables, 200);      

        }

        return $this->crearRespuestaError('El Responsable no existe', 404);
		
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Responsable::create($request->all());

        return $this->crearRespuesta('Responsable creado correctamente', 201);
    	
    }
    	//
    public function update(Request $request, $responsable_id){

    	$responsable = Responsable::find($responsable_id);

        if($responsable){
            $this->validacion($request);

            $direccion_id = $request->get('direccion_id');
            $usuario_id = $request->get('usuario_id');

            $responsable->direccion_id =$direccion_id;
            $responsable->usuario_id =$usuario_id;

            $responsable->save();

            return $this->crearRespuesta('Responsable actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El Responsable que desea actualizar no existe', 404);

    }
    	//
    public function destroy($responsable_id){

    	$responsable = Responsable::find($responsable_id);
        if($responsable){

            $responsable->delete();
            return $this->crearRespuesta('Responsable eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El Responsable no pudo ser eliminado', 404);
    	
    }
        //
    public function validacion($request){
        $reglas=
        [
            'direccion_id' => 'required|numeric',
            'usuario_id' => 'required|numeric',
        ];

        $this->validate($request, $reglas);
    }

}
