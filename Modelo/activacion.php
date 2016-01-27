<?php
include_once ("conexion.php");
include_once ("query.php");
class Activacion{
    
    private $table="activacion";

    public function add($conexion, $email, $codigo){        
        $query=new Query();
        $query->addActive($this->table,$conexion,$email,$codigo);
    }

    public function getActive($conexion, $email, $codigo){
    	$query=new Query();
        return $query->getActive($this->table,$conexion,$email, $codigo);
    }
    public function deleteActive($conexion, $email){
    	$query=new Query();
        $query->deleteActive($this->table,$conexion,$email);
    }


}