<?php namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;


class PlanController extends Controller
{
    //
    public function index(){

    	$planes = Plan::all();
        return $this->crearRespuesta($planes, 200);
    }
    //
    public function show($id)
	{
    	$planes =Plan::find($id);
        if($planes)
        {
            
           return $this->crearRespuesta($planes, 200);      

        }

        return $this->crearRespuestaError('El Plan no existe', 404);
		
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Plan::create($request->all());

        return $this->crearRespuesta('El Plan fue creado correctamente', 201);
    	
    }
    	//
    public function update(Request $request, $plan_id){

    	$plan = Plan::find($plan_id);

        if($plan){
            $this->validacion($request);

            $nombre = $request->get('nombre');
            $descripcion = $request->get('descripcion');

            $plan->nombre =$nombre;
            $plan->descripcion =$descripcion;

            $plan->save();

            return $this->crearRespuesta('El Plan fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El Plan que desea actualizar no existe', 404);

    }
    	//
    public function destroy($plan_id){

    	$plan = Plan::find($plan_id);
        if($plan){

            $plan->delete();
            return $this->crearRespuesta('El Plan fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El Plan no pudo ser eliminado', 404);
    	
    }
        //
    public function validacion($request){
        $reglas=
        [
            'nombre' => 'required',
            'descripcion' => 'required',
        ];

        $this->validate($request, $reglas);
    }

}
