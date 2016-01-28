<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/resultado.php");
    include_once ("../../Modelo/conexion.php");
    include_once ("../../Modelo/activacion.php");
   class UsuariosAdmin{

        public function actividadUsuarios(){//funcion que determina la inactividad de los usuarios
            date_default_timezone_set("America/Bogota");
            $fechaActual= date("Y-m-d");
            $mesAct= substr($fechaActual,5,2);//se extaren el mes y el día de la fecha actual
            $diaAct= substr($fechaActual,8,2);

            $conexion=new Conexion();
            $conexion=$conexion->conectar(); 

            $resultado=new Resultado();
            $activacion=new Activacion();      

            $users=new Usuario();
            $usuarios=$users->getAllUsers($conexion);// se realiza una consulta que devuelve usuarios registrados.
            if($usuarios->num_rows != 0){             
                foreach ($usuarios as $user) {
                     $datos=$this->getControl($user['email'])->fetch_array(MYSQLI_ASSOC); //por cada usuario registado se extraen los datos de la tabla control                    
                     $mes= substr($datos['fecha'],5,2);//ultimo día y mes donde el usuario realizo alguna prueba
                     $dia= substr($datos['fecha'],8,2);
                     if($dia != '00' && $mes != '00'){
                         if($mesAct != $mes &&  $diaAct-$dia > -3 ) {//si el usuario lleva mas de un mes sin resolver las pruebas se envia un correo avisandole que sera eliminado del sistema
                              $contenido="Neuroentrenamiento: \nTe informamos que llevas más de 1 mes sin actividad alguna 
                                        en el aplicativo en el cual estas registrado, debido a esto seras eliminado de nuestro
                                        sistema. Si quieres seguir entrenandote, tendras que registrarte de nuevo. 
                                        \nTe agradecemos tu atención y comprensión\n
                                        Atentamente: Administración Neuroentrenamiento\n
                                        neurocartilla@gmail.com \nUniversidad de Cundinamarca Facatativá. ";
                            mail($datos['users_email'], "Informe Neuroentrenamiento", $contenido);
                            $resultado->deleteResult($conexion, $datos['users_email']);//se elimina todos los resultados que corresponden a ese usuario.
                            $activacion->deleteActive($conexion, $datos['users_email']);//se elimina tambien de la tabla activacion
                            $users->deleteUser($conexion, $datos['users_email']);//se elimina al usuario de la tabla users
                            $control=new Control($datos['users_email']);
                            $control->deleteControl($conexion); //se elimina el usuario de la tabla control 
                            $contenido="Se ha eliminado al usuario : ".$datos['users_email']."
                                        del sistema por inactividad de más de 1 mes";
                             mail('neurocartilla@gmail.com', "Informe Neuroentrenamiento", $contenido);//se informa al administrador mediante un correo que un usuario ha sido eliminado                                                                             
                         }elseif( ($mesAct == $mes && ($diaAct-$dia) > 15) || ($mesAct != $mes && ($diaAct-$dia) > -16 )){//Si el usuario lleva mas de 2 semanas sin resolver las pruebas se le envia un correo diciendole que debera iniciar de cero 
                             $contenido="Neuroentrenamiento: \nTe informamos que llevas más de 2 semanas sin actividad alguna 
                                        en el aplicativo en el cual estas registrado, cuando vuelvas tendras que realizar las 
                                        actividades desde el inicio.\nTe agradecemos tu atención y comprensión\n
                                        Atentamente: Administración Neuroentrenamiento\n
                                        neurocartilla@gmail.com \nUniversidad de Cundinamarca Facatativá. ";
                            mail($datos['users_email'], "Informe Neuroentrenamiento", $contenido);
                            $resultado->deleteResult($conexion, $datos['users_email']);//se elimina todos los resultados que corresponden a ese usuario.
                            $contador=0;
                            $dia=1;
                            $semana=1;
                            $fecha=$datos['fecha'];
                            $control=new Control($datos['users_email']);
                            $control->upControl($conexion, $contador, $dia, $semana, $fecha);//se actualizan los datos de la tabla control para que el usuario inicie desde cero 
                            $contenido="Se ha Reiniciado al usuario : ".$datos['users_email']."
                                        en el sistema por inactividad de más de 2 semanas";
                             mail('neurocartilla@gmail.com', "Informe Neuroentrenamiento", $contenido);//se informa al administrador mediante un correo que un usuario ha sido eliminado                             
                        } 
                     }

                }
            }
        }

        public function listar(){            
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $user=new Usuario();
            return $user->getAllUsers($conexion);
            
        }
        public function getUserByEmail($email){
        	$conexion=new Conexion();
            $conexion=$conexion->conectar();            

            $user=new Usuario();
            return $user->getUsersByEmail($conexion,$email);
            
        }
        public function getControl($email){
            $conexion=new Conexion();
            $conexion=$conexion->conectar();            

            $datos=new Control($email);
            return $datos->getControl($conexion);
            
        }
        public function getTimes($email){
            $conexion=new Conexion();
            $conexion=$conexion->conectar(); 

            $resultados=new Resultado();
            return $resultados->getResultByEmail($conexion, $email);                  
        }
                    
    }    
?>