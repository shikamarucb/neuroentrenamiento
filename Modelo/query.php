<?php

    include_once 'conexion.php';
    class Query{
        
        public function add($table,$conexion,$email,$nombre,$password){
            
            $conexion->query("INSERT into ".$table." values (\n'".$email."\n',\n'".$nombre."\n',\n'".$password."\n');");
            
        }
        
    }

?>