<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Log extends Model
{
	//agregar a todos los archivos los campos que tienen
	protected $fillable = ['usuario_id', 'accion','tabla', 'columna'];
	//relacion un plan tiene muchos ejes

	protected $table = 'logs';
}