<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Direccion extends Model
{
	//agregar a todos los archivos los campos que tienen
	 protected $fillable = ['nombre', 'correo', 'responsable'];
	//relacion que indica que cada direccion tiene un solo responsable
	public function responsable()
	{
		return $this->hasMany('App\Responsable');
	}
	 protected $table = 'direcciones';
}