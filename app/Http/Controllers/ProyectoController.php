<?php namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    //
    public function index(){

    	$proyectos = Proyecto::all();
        return $this->crearRespuesta($proyectos, 200);
    }
    //
    public function show($id)	{
		$proyecto =Proyecto::find($id);
        if($proyecto)
        {
            
           return $this->crearRespuesta($proyecto, 200);      

        }

        return $this->crearRespuestaError('El proyecto no existe', 404);
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Usuario::create($request->all());

        return $this->crearRespuesta('El proyecto fue creado correctamente', 201);
    }
    	//
    public function update(Request $request, $proyecto_id){

    	$proyecto = Proyecto::find($proyecto_id);

        if($proyecto){
            $this->validacion($request);

           
            $nombre = $request->get('nombre');
            $fin_id = $request->get('fin_id');
            $direccion_id = $request->get('direccion_id');
           
           

            $proyecto->nombre =$nombre;
            $proyecto->fin_id =$fin_id;
            $proyecto->direccion_id =$direccion_id;
            
            

            $proyecto->save();

            return $this->crearRespuesta('El proyecto fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El proyecto que desea actualizar no existe', 404);
    }
    	//
    public function destroy($proyecto_id){

    	$proyecto = Usuario::find($proyecto_id);
        if($proyecto){

            $proyecto->delete();
            return $this->crearRespuesta('El proyecto fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El proyecto no pudo ser eliminado', 404);
    }
        //
    public function validacion($request){
        $reglas=
        [
            'nombre' => 'required',
            'fin_id' => 'required',
            'direccion_id' => 'required',
            
        ];

        $this->validate($request, $reglas);
    }

}
