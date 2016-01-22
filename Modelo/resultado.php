<?php
include_once ("conexion.php");
include_once ("query.php");
class Resultado{
    
    private $table="resultado";   
        
    public function addResultado($conexion, $email, $tipo, $puntos, $dia, $semana, $tiempo){
        $query=new Query();
        $query->adResultado($this->table,$conexion, $email, $tipo, $puntos, $dia, $semana, $tiempo);

    }

    public function getResultByWeek($conexion, $email, $semana){
    	$query=new Query();
    	return $query->getResultByWeek($this->table,$conexion, $email, $semana);
    }

    public function getResultBySex($conexion,$semana){
        $query=new Query();
    	return $query->getResultBysex($conexion, $semana);
    }
    
}
?>