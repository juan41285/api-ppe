<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Direccion extends Model
{
	 protected $fillable = ['nombre', 'correo', 'responsable'];
	//relacion que indica que cada direccion tiene un solo responsable
	public function responsable()
	{
		return $this->hasMany('App\Responsable');
	}
	 protected $table = 'direcciones';
}