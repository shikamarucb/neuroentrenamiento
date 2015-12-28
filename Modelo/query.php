<?php
    include_once ("conexion.php");
    class Query{
        //funciones para el manejo de usuarios
        public function add($table,$conexion,$email,$nombre,$apellido,$edad,$genero,$grado,$password,$roll){  //funcion para el register      
            $conexion->query("INSERT into ".$table." values ('".$email."','".$nombre."','".
                         $apellido."','".$genero."','".$edad."','".$grado."','".
                             $password."','".$roll."');");
        }
        
        public function get($table,$email,$password,$conexion){//funcion para el logueo
            return $conexion->query("SELECT * from ".$table." where email = '".$email."'
                               AND password = '".$password."' AND roll= 3 ;");            
        }

        public function upUser($table,$conexion,$email,$nombre,$apellido,$edad,$genero,$grado){//actualiza un usuario seleccionado desde el dashboard del admin
          $conexion->query("UPDATE ".$table." SET nombre='".$nombre."', apellido='".$apellido."',
                         edad='".$edad."', genero='".$genero."', grado='".$grado."' where email='".$email."';");
        }

        public function deleteUser($table,$conexion,$email){//elimina un usuario seleccionado desde el dash del admin
            return $conexion->query("DELETE from ".$table." where email='".$email."';");            
        }

        public function getUsers($table,$conexion){//obtiene todos los usuarios registrados
            return $conexion->query("SELECT * from ".$table." where roll= 3 ;");            
        }

        public function getUsersByEmail($table,$conexion,$email){//obtiene un usuario unicamente por su email,  utilizado para el dashboard
            return $conexion->query("SELECT * from ".$table." where  email = '".$email."'
                               AND roll= 3 ;");            
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

        public function adResultado($table, $conexion, $email, $tipo, $puntos, $dia, $semana,$tiempo){                 
             $conexion->query("INSERT into ".$table."(usuario_correo, prueba_tipo, tiempo, puntaje_usuario, dia, semana)
                  values ('".$email."','".$tipo."','".$tiempo."','".$puntos."',
                  '".$dia."','".$semana."');");      
        }
        
    }
?>
