<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Plan extends Model
{
	//agregar a todos los archivos los campos que tienen
	protected $fillable = ['nombre', 'descripcion'];
	//relacion un plan tiene muchos ejes
	public function ejes()
	{
		return $this->hasMany('App\Eje');
	}
	protected $table = 'planes';
}