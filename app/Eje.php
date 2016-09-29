<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Eje extends Model
{
	//agregar a todos los archivos los campos que tienen
	protected $fillable = ['nombre', 'descripcion', 'plan_id'];
	//relacion un eje pertenece a un solo plan especifico
	public function plan()
	{
		return $this->belongsTo('App\Plan');
	}

	//relacion un eje puede tener muchos objetivos estrategicos
	public function objetivoestrategico()
	{
		return $this->hasMany('App\ObjetivoEstrategico');
	}
	protected $table = 'ejes';

}