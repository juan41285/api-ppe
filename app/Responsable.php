<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Responsable extends Model
{
	//agregar a todos los archivos los campos que tienen
	protected $fillable = ['direccion_id', 'usuario_id'];
	//relacion que indica que cada direccion tiene un solo responsable
	public function direccion()
	{
		return $this->belongsTo('App\Direccion');
	}
	protected $table = 'responsables';
	
}