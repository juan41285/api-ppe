<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Colaborador extends Model
{
	//agregar a todos los archivos los campos que tienen
	
	protected $fillable = ['origen', 'direccion_id','origen_id'];
	//relacion que indica que cada direccion tiene un solo responsable

	protected $table = 'colaboradores';


}