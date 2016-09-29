<?php namespace App\Http\Controllers;

use App\Eje;
use Illuminate\Http\Request;

class EjeController extends Controller
{
    //
    public function index(){

    	$ejes = Eje::all();
        return $this->crearRespuesta($ejes, 200);
    }
    //
    public function show($id)
	{
    	$ejes =Eje::find($id);
        if($ejes)
        {
            
           return $this->crearRespuesta($ejes, 200);      

        }

        return $this->crearRespuestaError('El Eje no existe', 404);
		
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Eje::create($request->all());

        return $this->crearRespuesta('Eje creado correctamente', 201);
    	
    }
    	//
    public function update(Request $request, $eje_id){

    	$eje = Eje::find($eje_id);

        if($eje){
            $this->validacion($request);

            $nombre = $request->get('nombre');
            $descripcion = $request->get('descripcion');
            $plan_id = $request->get('plan_id');

            $eje->nombre =$nombre;
            $eje->descripcion =$descripcion;
            $eje->plan_id =$plan_id;

            $eje->save();

            return $this->crearRespuesta('Eje actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El Eje que desea actualizar no existe', 404);

    }
    	//
    public function destroy($eje_id){

    	$eje = Eje::find($eje_id);
        if($eje){

            $eje->delete();
            return $this->crearRespuesta('Eje eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El Eje no pudo ser eliminado', 404);
    	
    }
        //
    public function validacion($request){
        $reglas=
        [
            'nombre' => 'required',
            'descripcion' => 'required',
            'plan_id' => 'required|numeric',
        ];

        $this->validate($request, $reglas);
    }

}
