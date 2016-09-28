<?php namespace App\Http\Controllers;

use App\Direccion;

class DireccionController extends Controller
{
    //
    public function index(){

        $direcciones = Direccion::all();
        return $this->crearRespuesta($direcciones, 200);
    }
    //
    public function show()
	{
    	return 'direcciones obtener';
		
	}
	//
    public function store(){

    	//test
    	return 'direcciones obtener';
    	
    }
    	//
    public function update(){

    	//test
    	return 'direcciones update';

    }
    	//
    public function destroy(){

    	//test
    	return 'direcciones obtener';
    	
    }

}
