<?php  namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Indicador extends Model
{
	
	//agregar a todos los archivos los campos que tienen
	protected $fillable = ['indicador', 'meta', 'vigencia','objetivo','tipo'];
	//relacion un indicador puede tener muchos Obj estrategicos
	public function iestrategicos()
	{
		return $this->belongsTo('App\ObjetivoEstrategico');
	}

    //relacion un objetivo estrategico tiene muchos objetivos operativos
	public function ioperativos()
	{
		return $this->belongsTo('App\ObjetivoOperativo');
	}
	protected $table = 'indicadores';
}