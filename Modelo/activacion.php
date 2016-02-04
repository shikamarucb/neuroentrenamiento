<?php
include_once ("conexion.php");
include_once ("query.php");
class Activacion{
    //esta clase hace peticiones a la clase Query que es la encargada de realizar todas las consultas solicitadas deda cada metodo.
    private $table="activacion";

    public function add($conexion, $email, $codigo){   //funcion que agrega el el codigo de activacion a un correo especifico     
        $query=new Query();
        $query->addActive($this->table,$conexion,$email,$codigo);
    }

    public function getActive($conexion, $email, $codigo){//funcion que extrae el codigo para verificar la activacion de la cuenta
    	$query=new Query();
        return $query->getActive($this->table,$conexion,$email, $codigo);
    }
    public function deleteActive($conexion, $email){// al eliminar un usuario por inactividad también se elimina de esta tabla
    	$query=new Query();
        $query->deleteActive($this->table,$conexion,$email);
    }


}