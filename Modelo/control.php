<?php
include_once ("conexion.php");
include_once ("query.php");
class Control{
    //esta clase hace peticiones a la clase Query que es la encargada de realizar todas las consultas solicitadas deda cada metodo.
    private $table="control";
    private $id;
    private $dia_usuario;
    private $semana_usuario;
    private $contador_actividad;
    private $users_email;
    
    function __construct($users_email){
        $this->users_email=$users_email;
    }
    
    public function addControl($conexion){//cuando el usuario se registra, en esta tabla tambien se agregan datos para el seguimiento del proceso del usuario 
        $query=new Query();
        $query->addControl($conexion, $this->table, $this->users_email);
    }
    
    public function getControl($conexion){//se extraen los datos para hacer seguimientos
        $query=new Query();
        return $query->getControl($this->table,$this->users_email,$conexion);
    }
    public function upControl($conexion, $contador, $dia, $semana, $fecha){ //funcion para actualizar los datos de esta tabla       
        $conexion->query("UPDATE ".$this->table." SET dia_usuario=".$dia.", semana_usuario=".$semana.",
                         contador_actividad=".$contador.", fecha='".$fecha."'  where users_email='".$this->users_email."';");
    }
    public function deleteControl($conexion){//cuando el usuario se elimina por inactividad, también se elimina de esta tabla
        $query=new Query();
        $query->deleteControl($conexion, $this->table, $this->users_email);
    }
    
}
?>