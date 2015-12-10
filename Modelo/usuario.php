<?php
include_once ("conexion.php");
include_once ("query.php");
class Usuario{
    
    private $table="users";
    private $roll=3;
    public function addUser($conexion,$email,$nombre,$apellido,$edad,$genero,$grado,$password){

        $query=new Query();
        $query->add($this->table,$conexion,$email,$nombre,$apellido,
                    $edad,$genero,$grado,$password,$this->roll);
    }
    
    public function getUser($conexion, $email, $password){
        $query=new Query();
        return $query->get($this->table,$email,$password,$conexion);
    }
    
    
}
?>