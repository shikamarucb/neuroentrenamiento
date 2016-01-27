<?php
include_once ("conexion.php");
include_once ("query.php");
class Resultado{
    
    private $table="resultado";   
        
    public function addResultado($conexion, $email, $tipo, $puntos, $dia, $semana, $tiempo){
        $query=new Query();
        $query->adResultado($this->table,$conexion, $email, $tipo, $puntos, $dia, $semana, $tiempo);

    }

    public function getResult($conexion, $email, $dia, $semana){
        $query=new Query();
        return $query->getResult($this->table,$conexion, $email, $dia, $semana);
    }

    public function getResultByWeek($conexion, $email, $semana){
    	$query=new Query();
    	return $query->getResultByWeek($this->table,$conexion, $email, $semana);
    }

    public function getResultBySex($conexion,$semana){
        $query=new Query();
    	return $query->getResultBysex($conexion, $semana);
    }

    public function getResultByAge($conexion, $semana){
        $query=new Query();
        return $query->getResultByAge($conexion, $semana);
    }

    public function getResultByCourse($conexion, $semana){
        $query=new Query();
        return $query->getResultByCourse($conexion, $semana);
    }

    public function getResultByEmail($conexion, $email){
        $query=new Query();
        return $query->getResultByEmail($this->table,$conexion, $email);
    }

    public function deleteResult($conexion, $email){
        $query=new Query();
        $query->deleteResult($conexion, $this->table, $email);
    }
    
}
?>