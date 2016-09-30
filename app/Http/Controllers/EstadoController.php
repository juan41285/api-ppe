<?php namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    //
    public function index(){

    	$estado =  Estado::all();
        return $this->crearRespuesta($estado, 200);
    }
    //
    public function show($id)	{
		$estado = Estado::find($id);
        if($estado)
        {
            
           return $this->crearRespuesta($estado, 200);      

        }

        return $this->crearRespuestaError('Estado no existe', 404);
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Usuario::create($request->all());

        return $this->crearRespuesta('Estado fue creado correctamente', 201);
    }
    	//
    public function update(Request $request, $estado_id){

    	$estado =  Estado::find($estado_id);

        if($estado){
            $this->validacion($request);

           
           
            $nombre = $request->get('nombre');
            $valor = $request->get('valor');
           
           

          
            $estado->nombre =$nombre;
            $estado->valor =$valor;
            
            

            $estado->save();

            return $this->crearRespuesta('Estado fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('Estado que desea actualizar no existe', 404);
    }
    	//
    public function destroy($estado_id){

    	$estado = Usuario::find($estado_id);
        if($estado){

            $estado->delete();
            return $this->crearRespuesta('Estado fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('Estado no pudo ser eliminado', 404);
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
