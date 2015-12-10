<?php
    include_once ("conexion.php");
    class Query{
        //funciones para el manejo de usuarios
        public function add($table,$conexion,$email,$nombre,$apellido,$edad,$genero,$grado,$password,$roll){        
            $conexion->query("INSERT into ".$table." values ('".$email."','".$nombre."','".
                         $apellido."','".$genero."','".$edad."','".$grado."','".
                             $password."','".$roll."');");
        }
        
        public function get($table,$email,$password,$conexion){
            return $conexion->query("SELECT * from ".$table." where email = '".$email."'
                               AND password = '".$password."' AND roll= 3 ;");
            
        }

        //Funciones para el manejo de la tabla control 
        public function addControl($conexion, $table, $users_email){            
             $conexion->query("INSERT into ".$table."(dia_usuario, semana_usuario, contador_actividad, users_email)
                               values (\n'".'1'."\n',\n'".'1'."\n',\n'".'0'."\n',\n'".$users_email."\n');");
        } 
        
    }
?>
