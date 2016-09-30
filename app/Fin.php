<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Fin extends Model
{
	//agregar a todos los archivos los campos que tienen
	
	protected $fillable = ['nombre', 'descripcion', 'direccion_id', 'objetivo_operativo_id'];
	//relacion que indica que cada direccion tiene un solo responsable
	// public function colaboradores()
	// {
	// 	return $this->hasMany('App\Direccion');
	// }

	// public function indicadores()
	// {
	// 	return $this->hasMany('App\Indicador');
	// }
	protected $table = 'fines';
}