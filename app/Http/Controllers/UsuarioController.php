<?php namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function index(){

    	$usuarios = Usuario::all();
        return $this->crearRespuesta($usuarios, 200);
    }
    //
    public function show($id)	{
		$usuarios =Usuario::find($id);
        if($usuarios)
        {
            
           return $this->crearRespuesta($usuarios, 200);      

        }

        return $this->crearRespuestaError('El Usuario no existe', 404);
	}
	//
    public function store(Request $request){

    	$this->validacion($request);

        Usuario::create($request->all());

        return $this->crearRespuesta('El Usuario fue creado correctamente', 201);
    }
    	//
    public function update(Request $request, $usuario_id){

    	$usuario = Usuario::find($usuario_id);

        if($usuario){
            $this->validacion($request);

            $apellido = $request->get('apellido');
            $nombre = $request->get('nombre');
            $dni = $request->get('dni');
            $telefono = $request->get('telefono');
            $correo = $request->get('correo');
            $tipo = $request->get('tipo');

            $usuario->apellido =$apellido;
            $usuario->nombre =$nombre;
            $usuario->dni =$dni;
            $usuario->telefono =$telefono;
            $usuario->correo =$correo;
            $usuario->tipo =$tipo;

            $usuario->save();

            return $this->crearRespuesta('El Usuario fue actualizado correctamente', 201);

        }
    
       return $this->crearRespuestaError('El Usuario que desea actualizar no existe', 404);
    }
    	//
    public function destroy($usuario_id){

    	$usuario = Usuario::find($usuario_id);
        if($usuario){

            $usuario->delete();
            return $this->crearRespuesta('El Usuario fue eliminado correctamente', 200);
        }
       return $this->crearRespuestaError('El Usuario no pudo ser eliminado', 404);
    }
        //
    public function validacion($request){
        $reglas=
        [
            'apellido' => 'required',
            'nombre' => 'required',
            'dni' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'tipo' => 'required|numeric',
        ];

        $this->validate($request, $reglas);
    }

}
