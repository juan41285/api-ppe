<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ObjetivoEstrategico extends Model
{
	
	//relacion un objetivo estrategico pertenece a un eje
	public function eje()
	{
		return $this->belongsTo('App\Eje');
	}
	
}