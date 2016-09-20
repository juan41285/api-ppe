<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Usuario extends Model
{
	
	//relacion que indica que cada direccion tiene un solo responsable
	public function direccion()
	{
		return $this->belongsTo('App\Direccion');
	}
	
}