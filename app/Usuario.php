<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Usuario extends Model
{
	//agregar a todos los archivos los campos que tienen
	protected $fillable = ['apellido', 'nombre', 'dni', 'telefono', 'correo', 'tipo'];

	protected $table = 'usuarios';

}