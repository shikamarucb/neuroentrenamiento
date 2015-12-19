<?php
include_once ("conexion.php");
include_once ("query.php");
class Resultado{
    
    private $table="resultado";   
        
    public function addResultado($conexion, $email, $tipo, $puntos, $dia, $semana, $tiempo){
        $query=new Query();
        $query->adResultado($this->table,$conexion, $email, $tipo, $puntos, $dia, $semana, $tiempo);

    }
    
}
?>