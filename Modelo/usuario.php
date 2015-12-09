<?php
include_once ("conexion.php");
include_once ("query.php");
class Usuario{
    
    private $table="users";
    private $email;
    private $nombre;
    private $apellido;
    private $edad;
    private $genero;
    private $grado;
    private $password;
    private $roll;
    function __construct($email,$nombre,$apellido,$edad,$genero,$grado,$password){
        $this->email=$email;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
        $this->genero=$genero;
        $this->grado=$grado;
        $this->password=$password;
        $this->roll=3;
    }
    
    public function addUser($conexion){
        $query=new Query();
        $query->add($this->table,$conexion,$this->email,$this->nombre,$this->apellido,
                    $this->edad,$this->genero,$this->grado,$this->password,$this->roll);
    }
    
    public function getUser($conexion){
        $query=new Query();
        $query->get($this->table,$this->email,$this->password,$conexion);
    }
    
}
?>