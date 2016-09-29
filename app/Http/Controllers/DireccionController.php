<?php namespace App\Http\Controllers;

use App\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    //
    public function index(){

        $direcciones = Direccion::all();
        return $this->crearRespuesta($direcciones, 200);
    }
    //
    public function show($id)
	{
    	$direcciones =Direccion::find($id);
        if($direcciones)
        {
            
           return $this->crearRespuesta($direcciones, 200);      

        }

        return $this->crearRespuestaError('La Direccion no existe', 404);
        
		
	}
	//
    public function store(Request $request){

        $this->validacion($request);
    	$this->validate($request, $reglas);

        Direccion::create($request->all());

        return $this->crearRespuesta('La Dirección fue creada correctamente', 201);
    	
    }
    	//
    public function update(Request $request, $direccion_id){

    	$direccion = Direccion::find($direccion_id);

        if($direccion){
            $this->validacion($request);

            $nombre = $request->get('nombre');
            $correo = $request->get('correo');
            $responsable = $request->get('responsable');

            $direccion->nombre =$nombre;
            $direccion->correo =$correo;
            $direccion->responsable =$responsable;

            $direccion->save();

            return $this->crearRespuesta('La Dirección fue actualizada correctamente', 201);

        }
    
       return $this->crearRespuestaError('La Dirección que desea actualizar no existe', 404);
    }
    	//
    public function destroy($direccion_id){

    	$direccion = Direccion::find($direccion_id);
        if($direccion){

            $direccion->delete();
            return $this->crearRespuesta('La Dirección fue eliminada correctamente', 200);
        }
       return $this->crearRespuestaError('La Dirección no pudo ser eliminada', 404);
    	
    }

    public function validacion($request){
        $reglas=
        [
            'nombre' => 'required',
            'correo' => 'required',
            'responsable' => 'required|numeric',
        ];

        $this->validate($request, $reglas);
    }

}
