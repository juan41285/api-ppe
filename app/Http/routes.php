<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//direcciones
$app->get('/direcciones','DireccionController@index');
$app->post('/direcciones','DireccionController@store');
$app->get('/direcciones/{id}','DireccionController@show');
$app->put('/direcciones/{id}','DireccionController@update');
$app->patch('/direcciones/{id}','DireccionController@update');
$app->delete('/direcciones/{id}','DireccionController@destroy');
//ejes
$app->get('/ejes','EjeController@index');
$app->post('/ejes','EjeController@store');
$app->get('/ejes/{id}','EjeController@show');
$app->put('/ejes/{id}','EjeController@update');
$app->patch('/ejes/{id}','EjeController@update');
$app->delete('/ejes/{id}','EjeController@destroy');
//planes
$app->get('/planes','PlanController@index');
$app->post('/planes','PlanController@store');
$app->get('/planes/{id}','PlanController@show');
$app->put('/planes/{id}','PlanController@update');
$app->patch('/planes/{id}','PlanController@update');
$app->delete('/planes/{id}','PlanController@destroy');
//ObjetivoEstrategico
$app->get('/estrategicos','ObjetivoEstrategicoController@index');
$app->post('/estrategicos','ObjetivoEstrategicoController@store');
$app->get('/estrategicos/{id}','ObjetivoEstrategicoController@show');
$app->put('/estrategicos/{id}','ObjetivoEstrategicoController@update');
$app->patch('/estrategicos/{id}','ObjetivoEstrategicoController@update');
$app->delete('/estrategicos/{id}','ObjetivoEstrategicoController@destroy');
//ObjetivoOperativo
$app->get('/operativos','ObjetivoOperativoController@index');
$app->post('/operativos','ObjetivoOperativoController@store');
$app->get('/operativos/{id}','ObjetivoOperativoController@show');
$app->put('/operativos/{id}','ObjetivoOperativoController@update');
$app->patch('/operativos/{id}','ObjetivoOperativoController@update');
$app->delete('/operativos/{id}','ObjetivoOperativoController@destroy');
//IndicadoresController
$app->get('/indicadores','IndicadoresController@index');
$app->post('/indicadores','IndicadoresController@store');
$app->get('/indicadores/{id}','IndicadoresController@show');
$app->put('/indicadores/{id}','IndicadoresController@update');
$app->patch('/indicadores/{id}','IndicadoresController@update');
$app->delete('/indicadores/{id}','IndicadoresController@destroy');
//ResponsabeController
$app->get('/responsable','ResponsableController@index');
$app->post('/responsable','ResponsableController@store');
$app->get('/responsable/{id}','ResponsableController@show');
$app->put('/responsable/{id}','ResponsableController@update');
$app->patch('/responsable/{id}','ResponsableController@update');
$app->delete('/responsable/{id}','ResponsableController@destroy');
//UsuarioController
$app->get('/usuario','UsuarioController@index');
$app->post('/usuario','UsuarioController@store');
$app->get('/usuario/{id}','UsuarioController@show');
$app->put('/usuario/{id}','UsuarioController@update');
$app->patch('/usuario/{id}','UsuarioController@update');
$app->delete('/usuario/{id}','UsuarioController@destroy');
//FinController
$app->get('/fines','FinController@index');
$app->post('/fines','FinController@store');
$app->get('/fines/{id}','FinController@show');
$app->put('/fines/{id}','FinController@update');
$app->patch('/fines/{id}','FinController@update');
$app->delete('/fines/{id}','FinController@destroy');
//ProyectoController
$app->get('/proyecto','ProyectoController@index');
$app->post('/proyecto','ProyectoController@store');
$app->get('/proyecto/{id}','ProyectoController@show');
$app->put('/proyecto/{id}','ProyectoController@update');
$app->patch('/proyecto/{id}','ProyectoController@update');
$app->delete('/proyecto/{id}','ProyectoController@destroy');
//ColaboradorController
$app->get('/colaborador','ColaboradorController@index');
$app->post('/colaborador','ColaboradorController@store');
$app->get('/colaborador/{id}','ColaboradorController@show');
$app->put('/colaborador/{id}','ColaboradorController@update');
$app->patch('/colaborador/{id}','ColaboradorController@update');
$app->delete('/colaborador/{id}','ColaboradorController@destroy');
//ProyectoIndicadorController
$app->get('/proyecto_indicador','ProyectoIndicadorController@index');
$app->post('/proyecto_indicador','ProyectoIndicadorController@store');
$app->get('/proyecto_indicador/{id}','ProyectoIndicadorController@show');
$app->put('/proyecto_indicador/{id}','ProyectoIndicadorController@update');
$app->patch('/proyecto_indicador/{id}','ProyectoIndicadorController@update');
$app->delete('/proyecto_indicador/{id}','ProyectoIndicadorController@destroy');
//AccionController
$app->get('/accion','AccionController@index');
$app->post('/accion','AccionController@store');
$app->get('/accion/{id}','AccionController@show');
$app->put('/accion/{id}','AccionController@update');
$app->patch('/accion/{id}','AccionController@update');
$app->delete('/accion/{id}','AccionController@destroy');
//PrioridadController
$app->get('/prioridad','PrioridadController@index');
$app->post('/prioridad','PrioridadController@store');
$app->get('/prioridad/{id}','PrioridadController@show');
$app->put('/prioridad/{id}','PrioridadController@update');
$app->patch('/prioridad/{id}','PrioridadController@update');
$app->delete('/prioridad/{id}','PrioridadController@destroy');
//EstadoController
$app->get('/estado','EstadoController@index');
$app->post('/estado','EstadoController@store');
$app->get('/estado/{id}','EstadoController@show');
$app->put('/estado/{id}','EstadoController@update');
$app->patch('/estado/{id}','EstadoController@update');
$app->delete('/estado/{id}','EstadoController@destroy');

$app->get('/', function() use ($app) {
    return $app->welcome();
});
 