<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Plan extends Model
{
	
	//relacion un plan tiene muchos ejes
	public function ejes()
	{
		return $this->hasMany('App\Eje');
	}
}