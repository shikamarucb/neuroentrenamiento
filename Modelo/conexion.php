<?php

    
    class Conexion{
        
        private $DB='cartilla';
        private $host='127.0.0.1';
        private $pass='';
        private $user='root';
        private $conexion;
        
        public function conectar(){
            $this->conexion=new mysqli($this->host,$this->user,$this->pass,$this->DB);
            if($this->conexion->connect_errno){
                echo "Fallo la conexion";
            }else{
                return $this->conexion;
            }
            
            
        }
    }
?>