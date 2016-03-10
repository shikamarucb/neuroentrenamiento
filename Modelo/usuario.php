<?php
include_once ("conexion.php");
include_once ("query.php");
class Usuario{
    //esta clase hace peticiones a la clase Query que es la encargada de realizar todas las acciones del CRUD solicitadas desde cada metodo.
    private $table="users";
   
//funciones para hacer el CRUD de los usuarios registrados... los culaes tienen un roll de categoria 3.
    public function addUser($conexion,$email,$nombre,$apellido,$edad,$genero,$grado,$password){
        $roll=3;
        $active=0;
        $query=new Query();
        $query->add($this->table,$conexion,$email,$nombre,$apellido,
                    $edad,$genero,$grado,$password,$roll, $active);
    }    
    public function getUser($conexion, $email, $password){//
        $query=new Query();
        return $query->get($this->table,$email,$password,$conexion);
    }

    public function updateUser($conexion,$email,$nombre,$apellido,$edad,$genero,$grado){
        $query=new Query();
        $query->upUser($this->table,$conexion,$email,$nombre,$apellido,
                    $edad,$genero,$grado);
    }

    public function deleteUser($conexion,$email){//se elimina un usuario.
        $query=new Query();
        $query->deleteUser($this->table,$conexion,$email);
    }
    
    public function getAllUsers($conexion){//se obtienen todos los usurios registrados activos
        $roll=3;
        $query=new Query();
        return $query->getUsers($this->table,$conexion,$roll);
    }
    public function getUsersByEmail($conexion,$email){
        $query=new Query();
        return $query->getUsersByEmail($this->table,$conexion,$email);
    }

    public function activarUsuario($conexion, $email){//funcion para activar los usuarios para que puedan ingresar
        $query=new Query();
        $query->activarUsuario($this->table,$conexion, $email);
    }

    public function updPassword($conexion, $email, $password){//se actualiza la contraseña
        $query=new Query();
        $query->updPass($this->table, $conexion, $email, $password);        
    }

    //funciones para hacer el CRUD de los administradores registrados...Los culaes tienen un roll de categoria 2 y pertenecen a la misma tabla de usuarios

    public function addAdmin($conexion,$email,$nombre,$apellido,$edad,$genero,$password){//se agregan administradores 
        $roll=2;
        $query=new Query();
        $query->addAdmin($this->table,$conexion,$email,$nombre,$apellido,
                    $edad,$genero,$password,$roll);
    }    
    public function getAdmin($conexion, $email, $password){//se obtiene un administrador apartir de su email.
        $query=new Query();
        return $query->get($this->table,$email,$password,$conexion);
    }

    public function updateAdmin($conexion,$email,$nombre,$apellido,$edad,$genero){//se actualiza los datos de un administrador.
        $query=new Query();
        $query->upAdmin($this->table,$conexion,$email,$nombre,$apellido,
                    $edad,$genero);
    }    
    
    public function getAllAdmins($conexion){//se obtienen todos los administradores. 
        $roll=2;
        $query=new Query();
        return $query->getUsers($this->table,$conexion,$roll);
    }    
    
}
?>
