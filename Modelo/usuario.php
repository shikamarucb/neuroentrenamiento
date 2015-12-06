<?php
include 'conexion.php';
include 'query.php';

class Usuario{
    
    private $table="usuario";
    private $conexion,$conexionPar;
    private $email;
    private $nombre;
    private $password;

    function __construct($email,$nombre,$password){
        $this->email=$email;
        $this->nombre=$nombre;
        $this->password=$password;
        
        $this->conexion=new Conexion();
        $this->conexionPar=$this->conexion->conectar();
        
    }
    
    public function getConexion(){
        return $this->conexion;
    }
    
    public function addUser(){
        $query=new Query();
        $query->add($this->table,$this->conexionPar,$this->email,$this->nombre,$this->password);
    }
    
}

?>