<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Proyecto extends Model
{
	//agregar a todos los archivos los campos que tienen
	
	protected $fillable = ['nombre', 'fin_id', 'direccion_id'];
	//relacion que indica que cada direccion tiene un solo responsable

	protected $table = 'proyectos';


}