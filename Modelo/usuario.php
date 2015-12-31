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

    public function updateUser($conexion,$email,$nombre,$apellido,$edad,$genero,$grado){
        $query=new Query();
        $query->upUser($this->table,$conexion,$email,$nombre,$apellido,
                    $edad,$genero,$grado);
    }

    public function deleteUser($conexion,$email){
        $query=new Query();
        $query->deleteUser($this->table,$conexion,$email);
    }
    
    public function getAllUsers($conexion){
        $query=new Query();
        return $query->getUsers($this->table,$conexion);
    }
    public function getUsersByEmail($conexion,$email){
        $query=new Query();
        return $query->getUsersByEmail($this->table,$conexion,$email);
    }
    
}
?>
