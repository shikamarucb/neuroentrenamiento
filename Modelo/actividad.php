<?php
include_once ("conexion.php");
include_once ("query.php");
class Actividad{
    
    private $table="actividad";
        
    public function getActividad($conexion, $tipo, $enunciado, $dia, $semana){
        $query=new Query();
        return $query->getActividad($this->table,$conexion, $tipo, $enunciado, $dia, $semana);
    }
    
}
?>