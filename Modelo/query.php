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
             $conexion->query("INSERT into ".$table." values (1 , 1, 0, '".$users_email."');");
        } 

        public function getControl($table,$email,$conexion){
            return $conexion->query("SELECT * from ".$table." where users_email = '".$email."';");        
        }

        //funciones para el manejo de la tabla Actividad

        public function getActividad($table,$conexion, $tipo, $enunciado, $dia, $semana){         
            return $conexion->query("SELECT respuesta from ".$table." where tipo='".$tipo."'
                   and dia=".$dia." and semana=".$semana." and enunciado_actividad='".$enunciado."';");      
        }

        //funciones para el manejo de la tabla Resultado

        public function adResultado($table, $conexion, $email, $tipo, $puntos, $dia, $semana){                 
             $conexion->query("INSERT into ".$table."(usuario_correo, prueba_tipo, puntaje_usuario, dia, semana)
                  values ('".$email."','".$tipo."','".$puntos."',
                  '".$dia."','".$semana."');");      
        }
        
    }
?>
