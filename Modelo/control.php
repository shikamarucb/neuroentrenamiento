<?php
include_once ("conexion.php");
include_once ("query.php");
class Control{
    
    private $table="control";
    private $id;
    private $dia_usuario;
    private $semana_usuario;
    private $contador_actividad;
    private $users_email;
    
    function __construct($users_email){
        $this->users_email=$users_email;
    }
    
    public function addControl($conexion){
        $query=new Query();
        $query->addControl($conexion, $this->table, $this->users_email);
    }
    
    public function getControl($conexion){
        $query=new Query();
        return $query->getControl($this->table,$this->users_email,$conexion);
    }
    public function upControl($conexion, $contador, $dia, $semana, $fecha){        
        $conexion->query("UPDATE ".$this->table." SET dia_usuario=".$dia.", semana_usuario=".$semana.",
                         contador_actividad=".$contador.", fecha='".$fecha."'  where users_email='".$this->users_email."';");
    }
    public function deleteControl($conexion){
        $query=new Query();
        $query->deleteControl($conexion, $this->table, $this->users_email);
    }
    
}
?>