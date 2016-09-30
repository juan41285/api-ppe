<?php namespace App\Http\Controllers;

use App\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    //
    public function index(){

    	$colaboradores = Colaborador::all();
        return $this->crearRespuesta($colaboradores, 200);
    }
    //
    public function show($id)	{
		$colaborador =Colaborador::find($id);
        if($colaborador)
        {
            
           return $this->crearRespuesta($colaborador, 200);      

        }

        return $this->crearRespuestaError('El Colaborador no existe', 404);
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Usuario::create($request->all());

        return $this->crearRespuesta('El Colaborador fue creado correctamente', 201);
    }
    	//
    public function update(Request $request, $colaborador_id){

    	$colaborador = Colaborador::find($colaborador_id);

        if($colaborador){
            $this->validacion($request);

           
            $origen = $request->get('origen');
            $origen_id = $request->get('origen_id');
            $direccion_id = $request->get('direccion_id');
           
           

            $colaborador->origen =$origen;
            $colaborador->origen_id =$origen_id;
            $colaborador->direccion_id =$direccion_id;
            
            

            $colaborador->save();

            return $this->crearRespuesta('El Colaborador fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El Colaborador que desea actualizar no existe', 404);
    }
    	//
    public function destroy($colaborador_id){

    	$colaborador = Usuario::find($colaborador_id);
        if($colaborador){

            $colaborador->delete();
            return $this->crearRespuesta('El Colaborador fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El Colaborador no pudo ser eliminado', 404);
    }
        //
    public function validacion($request){
        $reglas=
        [
            'origen' => 'required',
            'origen_id' => 'required',
            'direccion_id' => 'required',
            
        ];

        $this->validate($request, $reglas);
    }

}
