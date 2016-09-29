<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ObjetivoOperativo extends Model
{
	//agregar a todos los archivos los campos que tienen
	protected $fillable = ['nombre', 'descripcion', 'objetivo_estrategico_id'];
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
	protected $table = 'objetivos_operativos';
}