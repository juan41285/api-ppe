<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Direccion extends Model
{
	
	//relacion que indica que cada direccion tiene un solo responsable
	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
	}
}