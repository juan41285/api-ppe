<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ObjetivoEstrategico extends Model
{
	
	//relacion un objetivo estrategico pertenece a un eje
	public function eje()
	{
		return $this->belongsTo('App\Eje');
	}

    //relacion un objetivo estrategico tiene muchos objetivos operativos
	public function operativos()
	{
		return $this->hasMany('App\ObjetivoOperativo');
	}

 //relacion un objetivo estrategico tiene muchos indicadores
	public function oeindicadores()
	{
		return $this->hasMany('App\Indicador');
	}

}