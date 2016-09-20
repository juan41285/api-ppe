<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Indicador extends Model
{
	
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
}