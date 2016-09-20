<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ObjetivoOperativo extends Model
{
	    //relacion un objetivo operativo pertence a un estrategico
	public function estrategico()
	{
		return $this->belongsTo('App\ObjetivoEstrategico');
	}

     //relacion un objetivo estratoperativo  tiene muchos indicadores
	public function oeindicadores()
	{
		return $this->hasMany('App\Indicador');
	}
	
}