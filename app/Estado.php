<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Estado extends Model
{
	//agregar a todos los archivos los campos que tienen
	
	protected $fillable = ['nombre', 'valor'];
	//relacion que indica que cada direccion tiene un solo responsable

	protected $table = 'estados';


}