<?php namespace App\Http\Controllers;

use App\Fin;
use Illuminate\Http\Request;

class FinController extends Controller
{
    //
    public function index(){

    	$fines = Fin::all();
        return $this->crearRespuesta($fines, 200);
    }
    //
    public function show($id)	{
		$fin =Fin::find($id);
        if($fin)
        {
            
           return $this->crearRespuesta($fin, 200);      

        }

        return $this->crearRespuestaError('El Fin no existe', 404);
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Usuario::create($request->all());

        return $this->crearRespuesta('El Fin fue creado correctamente', 201);
    }
    	//
    public function update(Request $request, $fin_id){

    	$fin = Fin::find($fin_id);

        if($fin){
            $this->validacion($request);

           
            $nombre = $request->get('nombre');
            $descripcion = $request->get('descripcion');
            $direccion_id = $request->get('direccion_id');
            $objetivo_operativo_id = $request->get('objetivo_operativo_id');
           

            $fin->nombre =$nombre;
            $fin->descripcion =$descripcion;
            $fin->direccion_id =$direccion_id;
            $fin->objetivo_operativo_id =$objetivo_operativo_id;
            

            $fin->save();

            return $this->crearRespuesta('El Fin fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El Fin que desea actualizar no existe', 404);
    }
    	//
    public function destroy($fin_id){

    	$fin = Usuario::find($fin_id);
        if($fin){

            $fin->delete();
            return $this->crearRespuesta('El Fin fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El Fin no pudo ser eliminado', 404);
    }
        //
    public function validacion($request){
        $reglas=
        [
            'nombre' => 'required',
            'descripcion' => 'required',
            'objetivo_operativo_id' => 'required',
            'direccion_id' => 'required',
            
        ];

        $this->validate($request, $reglas);
    }

}
