<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ProyectoIndicador extends Model
{
	//agregar a todos los archivos los campos que tienen
	
	protected $fillable = ['proyecto_id', 'indicador_id'];
	//relacion que indica que cada direccion tiene un solo responsable

	protected $table = 'proyecto_indicadores';


}