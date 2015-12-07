<?php

    include_once 'conexion.php';
    class Query{
        
        public function add($table,$conexion,$email,$nombre,$apellido,$edad,$genero,$grado,$password,$roll){
            $conexion->query("INSERT into ".$table." values (\n'".$email."\n',\n'".$nombre."\n',\n'".
                             $apellido."\n',\n'".$genero."\n',\n'".$edad."\n',\n'".$grado."\n',\n'".
                             $password."\n',\n'".$roll."\n');");
        }
        
        public function get($table,$conexion,$email,$password,$conexion){
            $conexion->query("SELECT email,password from usuario where email = \n'".$email."\n' AND password = '".$password."\n';");
        }
        
    }

?>