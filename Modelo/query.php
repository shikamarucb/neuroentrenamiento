<?php
    include_once ("conexion.php");
    class Query{
        //funciones para el manejo de usuarios
        public function add($table,$conexion,$email,$nombre,$apellido,$edad,$genero,$grado,$password,$roll,$active){  //funcion para el register      
            $conexion->query("INSERT into ".$table." values ('".$email."','".$nombre."','".
                         $apellido."','".$genero."','".$edad."','".$grado."','".
                             $password."','".$roll."', '".$active."');");
        }

        public function addAdmin($table,$conexion,$email,$nombre,$apellido,$edad,$genero,$password,$roll){  //funcion para el register      
            $conexion->query("INSERT into ".$table." (email, nombre, apellido, genero, edad, password, roll, active)
                        values ('".$email."','".$nombre."','".
                        $apellido."','".$genero."','".$edad."','".$password."','".$roll."', '1');");
        }
        
        public function get($table,$email,$password,$conexion){//funcion para el logueo
            return $conexion->query("SELECT * from ".$table." where email = '".$email."'
                               AND password = '".$password."' AND active=1;");            
        }

        public function upUser($table,$conexion,$email,$nombre,$apellido,$edad,$genero,$grado){//actualiza un usuario seleccionado desde el dashboard del admin
          $conexion->query("UPDATE ".$table." SET nombre='".$nombre."', apellido='".$apellido."',
                         edad='".$edad."', genero='".$genero."', grado='".$grado."' where email='".$email."';");
        }

        public function upAdmin($table,$conexion,$email,$nombre,$apellido,$edad,$genero){//actualiza un administrador seleccionado desde el dashboard del Super admin
          $conexion->query("UPDATE ".$table." SET nombre='".$nombre."', apellido='".$apellido."',
                         edad='".$edad."', genero='".$genero."' where email='".$email."';");
        }

        public function deleteUser($table,$conexion,$email){//elimina un usuario seleccionado desde el dash del admin
            return $conexion->query("DELETE from ".$table." where email='".$email."';");            
        }

        public function getUsers($table,$conexion, $roll){//obtiene todos los usuarios registrados
            return $conexion->query("SELECT * from ".$table." where roll=".$roll." and active=1 order by nombre ;");            
        }

        public function getUsersByEmail($table,$conexion,$email){//obtiene un usuario  o administrador unicamente por su email
            return $conexion->query("SELECT * from ".$table." where  email = '".$email."';");            
        }

        public function activarUsuario($table,$conexion, $email){//funcion para activar los usuarios que verifiquen el correo
            $conexion->query("UPDATE ".$table." SET active=1 where email='".$email."';");
        }

        public function updPass($table, $conexion, $email, $password){
            $conexion->query("UPDATE ".$table." SET password='".$password."' where email='".$email."';");
        }

        //Funciones para el manejo de la tabla control 
        public function addControl($conexion, $table, $users_email){            
             $conexion->query("INSERT into ".$table." (dia_usuario, semana_usuario, contador_actividad, users_email, fecha)
                        values (1 , 1, 0, '".$users_email."', '0000-00-00');");
        } 

        public function getControl($table,$email,$conexion){
            return $conexion->query("SELECT * from ".$table." where users_email = '".$email."';");        
        }

        public function deleteControl($conexion, $table, $email){
            $conexion->query("DELETE from ".$table." where users_email='".$email."';");
        }
        //manejo de la tabla activacion

        public function addActive($table, $conexion,$email,$codigo){            
             $conexion->query("INSERT into ".$table." (codigo, users_email) values ('".$codigo."','".$email."');");
        } 

        public function getActive($table,$conexion,$email, $codigo){
            return $conexion->query("SELECT * from ".$table." where users_email=".$email." AND codigo = '".$codigo."';");
        }

        public function deleteActive($table,$conexion,$email){
           $conexion->query("DELETE from ".$table." where users_email='".$email."';");
        }

        //funciones para el manejo de la tabla Actividad

        public function getActividad($table,$conexion, $tipo, $enunciado, $dia, $semana){         
            return $conexion->query("SELECT respuesta from ".$table." where tipo='".$tipo."'
                   and dia=".$dia." and semana=".$semana." and enunciado_actividad='".$enunciado."';");      
        } 

        public function getActividadByDay($table,$conexion, $tipo, $dia, $semana){         
            return $conexion->query("SELECT * from ".$table." where tipo='".$tipo."'
                   and dia=".$dia." and semana=".$semana." ;");      
        }    

        //funciones para el manejo de la tabla Resultado

        public function adResultado($table, $conexion, $email, $tipo, $puntos, $dia, $semana,$tiempo){                 
             $conexion->query("INSERT into ".$table."(usuario_correo, prueba_tipo, tiempo, puntaje_usuario, dia, semana)
                  values ('".$email."','".$tipo."','".$tiempo."','".$puntos."',
                  '".$dia."','".$semana."');");      
        }

        public function getResult($table, $conexion, $email, $dia, $semana){
            return $conexion->query("SELECT * FROM ".$table." where usuario_correo='".$email."'
                    and dia=".$dia." and semana =".$semana." ;");
        }

        public function getResultByWeek($table, $conexion, $email, $semana){
          return $conexion->query("SELECT * from ".$table." where usuario_correo='".$email."' AND semana=".$semana.";");
        }

        public function getResultBysex($conexion, $semana){
           return $conexion->query("SELECT  avg(puntaje_usuario), users.genero, prueba_tipo,dia from resultado
                                    inner join users on resultado.usuario_correo=users.email AND semana=".$semana."
                                     group by genero,dia,prueba_tipo;");
        }

        public function getResultByAge($conexion, $semana){
           return $conexion->query("SELECT avg(puntaje_usuario), users.edad,prueba_tipo,dia from resultado
                                   inner join users on resultado.usuario_correo=users.email and semana=".$semana." 
                                   group by edad,dia,prueba_tipo order by edad;");
        }

        public function getResultByCourse($conexion, $semana){
           return $conexion->query("SELECT avg(puntaje_usuario), users.grado,prueba_tipo,dia from resultado
                                   inner join users on resultado.usuario_correo=users.email And semana=".$semana."
                                    group by grado,dia,prueba_tipo order by grado;");
        }

        public function getResultByEmail($table,$conexion, $email){
            return $conexion->query("SELECT * from ".$table." where usuario_correo='".$email."' order by semana;");
        }

        public function deleteResult($conexion, $table, $email){
            $conexion->query("DELETE from ".$table." where usuario_correo='".$email."';");
        }

        public function getResultByAverage($conexion, $email){
            return $conexion->query("SELECT  avg(puntaje_usuario), prueba_tipo, semana from resultado 
                                    where usuario_correo='".$email."'  group by prueba_tipo order by semana;");
        }
        
    }
?>
