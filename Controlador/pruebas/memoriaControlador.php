<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/conexion.php");
    include_once ("../../Modelo/actividad.php");
    include_once ("calificar.php");
    include_once ("cronometro.php");

    class Memoria{    	

    	public function memoria11(){
             session_start();//seccion para calcular el tiempo que se tardo en realizar la prueba.
             $fin=microtime(true);
             $ini=$_SESSION['tIni'];
             $segundos=$fin-$ini;
             $minutos=0;
             $segundos=round($segundos);
            while($segundos>59){
              $minutos=$minutos+1;
              $segundos=$segundos-60;
            }
            $tiempo=$minutos." : ".$segundos;
            
            $tipo="memoria";
            $puntos=0;
            $rango=0;    		
    		    $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $fruta1=strtoupper($conexion->real_escape_string(strip_tags($_POST['fruta1'])));//strtoupper convierte una cadena
            $fruta2=strtoupper($conexion->real_escape_string(strip_tags($_POST['fruta2'])));//a mayusculas
            $fruta3=strtoupper($conexion->real_escape_string(strip_tags($_POST['fruta3'])));
            $herra1=strtoupper($conexion->real_escape_string(strip_tags($_POST['herra1'])));
            $herra2=strtoupper($conexion->real_escape_string(strip_tags($_POST['herra2'])));
            $herra3=strtoupper($conexion->real_escape_string(strip_tags($_POST['herra3'])));
        
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="fruta";            
            $actividad=new Actividad();
            $frutas=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($frutas->num_rows != 0){                                               //LAS FRUTAS DEL EJERCICIO.
              while($infos=$frutas->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {                                    
                    if($info == $fruta1){                                                              
                       $rango=$rango+1;                       
                    }else{
                          if($info == $fruta2){                                                                             
                             $rango=$rango+1;
                          }else{
                            if($info == $fruta3){                                                            
                                $rango=$rango+1;
                             }
                          }    
                    }
                }
              }
            }

            $enunciado="herramienta";            
            //se extraeen los datos para las herramientas de la actividad
            $herramientas=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);
            if($herramientas->num_rows != 0){
              while($infos=$herramientas->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {                                    
                    if($info == $herra1){                                                              
                       $rango=$rango+1;                       
                    }else{
                          if($info == $herra2){                                                                             
                             $rango=$rango+1;
                          }else{
                            if($info == $herra3){                                                            
                                $rango=$rango+1;
                             }
                          }    
                    }
                }
              }
            }
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->seis($conexion);
            echo "Fin de la prueba";
    	}
      //Funcion para prueba de memoria 1- 3
      public function memoria13(){
            session_start();//seccion para calcular el tiempo que se tardo en realizar la prueba.
             $fin=microtime(true);
             $ini=$_SESSION['tIni'];
             $segundos=$fin-$ini;
             $minutos=0;
             $segundos=round($segundos);
            while($segundos>59){
              $minutos=$minutos+1;
              $segundos=$segundos-60;
            }
            $tiempo=$minutos." : ".$segundos;

            $tipo="memoria";
            $puntos=0;
            $rango=0;        
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $salvaje1=strtoupper($conexion->real_escape_string(strip_tags($_POST['salvaje1'])));
            $salvaje2=strtoupper($conexion->real_escape_string(strip_tags($_POST['salvaje2'])));
            $salvaje3=strtoupper($conexion->real_escape_string(strip_tags($_POST['salvaje3'])));
            $domestico1=strtoupper($conexion->real_escape_string(strip_tags($_POST['domestico1'])));
            $domestico2=strtoupper($conexion->real_escape_string(strip_tags($_POST['domestico2'])));
            $domestico3=strtoupper($conexion->real_escape_string(strip_tags($_POST['domestico3'])));
        
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="salvaje";            
            $actividad=new Actividad();
            $salvaje=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($salvaje->num_rows != 0){                                               
              while($infos=$salvaje->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {                                    
                    if($info == $salvaje1){                                                              
                       $rango=$rango+1;                       
                    }else{
                          if($info == $salvaje2){                                                                             
                             $rango=$rango+1;
                          }else{
                            if($info == $salvaje3){                                                            
                                $rango=$rango+1;
                             }
                          }    
                    }
                }
              }
            }

            $enunciado="domestico";            
            //se extraeen los datos para las herramientas de la actividad
            $domestico=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);
            if($domestico->num_rows != 0){
              while($infos=$domestico->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {                                    
                    if($info == $domestico1){                                                              
                       $rango=$rango+1;                       
                    }else{
                          if($info == $domestico2){                                                                            
                             $rango=$rango+1;
                          }else{
                            if($info == $domestico3){                                                            
                                $rango=$rango+1;
                             }
                          }    
                    }
                }
              }
            }
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->seis($conexion);
            echo "Fin de la prueba";


      }

      //funcion para prueba de memoria 1-4
      public function memoria14(){
             session_start();//seccion para calcular el tiempo que se tardo en realizar la prueba.
             $fin=microtime(true);
             $ini=$_SESSION['tIni'];
             $segundos=$fin-$ini;
             $minutos=0;
             $segundos=round($segundos);
            while($segundos>59){
              $minutos=$minutos+1;
              $segundos=$segundos-60;
            }
            $tiempo=$minutos." : ".$segundos;

            $tipo="memoria";
            $puntos=0;
            $rango=0;        
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $cuadAz=$conexion->real_escape_string(strip_tags($_POST['cuadradoAzul']));
            $estrella=$conexion->real_escape_string(strip_tags($_POST['estrella']));
            $circulo=$conexion->real_escape_string(strip_tags($_POST['circulo']));
            $cuadAm=$conexion->real_escape_string(strip_tags($_POST['cuadradoAmarillo']));
                   
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="cuadrado-azul";            
            $actividad=new Actividad();
            $figura=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figura->num_rows != 0){                                               
              $infos=$figura->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cuadAz){                                                              
                 $rango=$rango+1;                       
              }
            }

            $enunciado="estrella";                        
            $figura=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figura->num_rows != 0){                                               
              $infos=$figura->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $estrella){                                                              
                 $rango=$rango+1;                       
              }
            }

            $enunciado="circulo";                        
            $figura=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figura->num_rows != 0){                                               
              $infos=$figura->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $circulo){                                                              
                 $rango=$rango+1;                       
              }
            }

            $enunciado="cuadrado-amarillo";                        
            $figura=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figura->num_rows != 0){                                               
              $infos=$figura->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cuadAm){                                                              
                 $rango=$rango+1;                       
              }
            }


            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->cuatro($conexion);
            echo "Fin de la prueba";
      }
//funcion para prueba de memoria 1-5
      public function memoria15(){
             session_start();//seccion para calcular el tiempo que se tardo en realizar la prueba.
             $fin=microtime(true);
             $ini=$_SESSION['tIni'];
             $segundos=$fin-$ini;
             $minutos=0;
             $segundos=round($segundos);
            while($segundos>59){
              $minutos=$minutos+1;
              $segundos=$segundos-60;
            }
            $tiempo=$minutos." : ".$segundos;

            $tipo="memoria";
            $puntos=0;
            $rango=0;        
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $capital=$conexion->real_escape_string(strip_tags($_POST['capital']));
            $cuentos=$conexion->real_escape_string(strip_tags($_POST['cuentos']));
            $rojoAzul=$conexion->real_escape_string(strip_tags($_POST['rojoAzul']));
            $compromiso=$conexion->real_escape_string(strip_tags($_POST['compromiso']));
            $vegetal=$conexion->real_escape_string(strip_tags($_POST['vegetal']));
                   
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="capitalNarino";            
            $actividad=new Actividad();
            $nums=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($nums->num_rows != 0){                                               
              $infos=$nums->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $capital){                                                              
                 $rango=$rango+1;                      
              }
            }


            $enunciado="cuentosDeAdas";                        
            $nums=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($nums->num_rows != 0){                                               
              $infos=$nums->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cuentos){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="RojoAzul";                        
            $nums=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($nums->num_rows != 0){                                               
              $infos=$nums->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $rojoAzul){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="compromiso";                        
            $nums=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($nums->num_rows != 0){                                               
              $infos=$nums->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $compromiso){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="vegetal";                        
            $nums=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($nums->num_rows != 0){                                               
              $infos=$nums->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $vegetal){                                                              
                 $rango=$rango+1;                       
              }
            }

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->cinco($conexion);
            echo "Fin de la prueba";
      }
      //manejo de la prueba de memoria 2-2
      public function memoria22(){
             session_start();//seccion para calcular el tiempo que se tardo en realizar la prueba.
             $fin=microtime(true);
             $ini=$_SESSION['tIni'];
             $segundos=$fin-$ini;
             $minutos=0;
             $segundos=round($segundos);
            while($segundos>59){
              $minutos=$minutos+1;
              $segundos=$segundos-60;
            }
            $tiempo=$minutos." : ".$segundos;
            
            $tipo="memoria";
            $puntos=0;
            $rango=0;       
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $color1=strtoupper($conexion->real_escape_string(strip_tags($_POST['color3'])));//strtoupper convierte una cadena
            $color2=strtoupper($conexion->real_escape_string(strip_tags($_POST['color5'])));//a mayusculas
            $color3=strtoupper($conexion->real_escape_string(strip_tags($_POST['color4'])));
            $color4=$conexion->real_escape_string(strip_tags($_POST['color2']));
            $color5=strtoupper($conexion->real_escape_string(strip_tags($_POST['color1'])));
            $color6=$conexion->real_escape_string(strip_tags($_POST['color6']));
        
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="5";            
            $actividad=new Actividad();
            $colores=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($colores->num_rows != 0){                                               //LAS FRUTAS DEL EJERCICIO.
               $infos=$colores->fetch_array(MYSQLI_ASSOC);                                                                   
              if($infos["respuesta"] == $color5){                                                              
                 $rango=$rango+1;                       
              }                             
            }

            $enunciado="verde";                        
            $colores=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($colores->num_rows != 0){                                               //LAS FRUTAS DEL EJERCICIO.
               $infos=$colores->fetch_array(MYSQLI_ASSOC);                                                                   
              if($infos["respuesta"] == $color4){                                                              
                 $rango=$rango+1;                       
              }                             
            }

            $enunciado="1";                        
            $colores=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($colores->num_rows != 0){                                               //LAS FRUTAS DEL EJERCICIO.
               $infos=$colores->fetch_array(MYSQLI_ASSOC);                                                                   
              if($infos["respuesta"] == $color1){                                                              
                 $rango=$rango+1;                       
              }                             
            }

            $enunciado="3";                        
            $colores=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($colores->num_rows != 0){                                               //LAS FRUTAS DEL EJERCICIO.
               $infos=$colores->fetch_array(MYSQLI_ASSOC);                                                                   
              if($infos["respuesta"] == $color3){                                                              
                 $rango=$rango+1;                       
              }                             
            }

            $enunciado="2";                        
            $colores=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($colores->num_rows != 0){                                               //LAS FRUTAS DEL EJERCICIO.
               $infos=$colores->fetch_array(MYSQLI_ASSOC);                                                                   
              if($infos["respuesta"] == $color2){                                                              
                 $rango=$rango+1;                       
              }                             
            }

            $enunciado="azul";                        
            $colores=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($colores->num_rows != 0){                                               //LAS FRUTAS DEL EJERCICIO.
               $infos=$colores->fetch_array(MYSQLI_ASSOC);                                                                   
              if($infos["respuesta"] == $color6){                                                              
                 $rango=$rango+1;                       
              }                             
            }
            
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->seis($conexion);
            echo "Fin de la prueba";
      }
    }

    $metodo=$_GET['value'];
    $metodo=array('Memoria',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }

?>