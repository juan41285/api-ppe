<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Accion extends Model
{
	//agregar a todos los archivos los campos que tienen
	
	protected $fillable = ['nombre', 'fecha_inicio','fecha_fin','prioridad','estado','detalle','direccion_id'];
	//relacion que indica que cada direccion tiene un solo responsable

	protected $table = 'acciones';


}