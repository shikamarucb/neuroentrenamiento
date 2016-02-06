<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/conexion.php");
    include_once ("../../Modelo/actividad.php");
    include_once ("calificar.php");   

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
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
    	}
       //funcion para prueba de memoria semana 1- dia 2
      public function memoria12(){
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
            
            $circulo=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $cruz=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $sol=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $hexagono=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $cubo=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $cilindro=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $corazon=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));
            $cara=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));
                   
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="circulo";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $circulo){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="cara";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cara){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="corazon";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $corazon){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="hexagono";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $hexagono){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="cruz";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cruz){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="cubo";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cubo){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="cilindro";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cilindro){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="sol";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $sol){                                                              
                 $rango=$rango+1;                       
              }
            }

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->ocho($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
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
            header ("Location: ../../vista/pruebas/msg/finmsg.html");


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
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
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
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      //manejo de la preuab de la semana 2 dia 1
      public function memoria21(){
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
                   
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="figura";            
            $actividad=new Actividad();
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               //LAS FRUTAS DEL EJERCICIO.
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $rango=$rango+1;                       
                    }
                  }                                                  
                }
              }
            }
            
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->seis($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
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
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }

      //funcion para prueba de memoria 2-3
      public function memoria23(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
                   
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="deporte que jugaban";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }


            $enunciado="clima del dia del viaje";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="enojo de la madre";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="objeto que no llevaban";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="quienes iban";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                       
              }
            }

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->cinco($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      //funcion para prueba de memoria 2-4
      public function memoria24(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));
            $r8=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));
            $r9=strtoupper($conexion->real_escape_string(strip_tags($_POST['9'])));                                
                        
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="palabra1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                                           
                 $rango=$rango+1;                                     
              }              
            }
            $enunciado="palabra2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                        
              if(utf8_encode($infos["respuesta"]) == $r2){                                                                            
                 $rango=$rango+1;                                                                      
              }                                      
            }
            $enunciado="palabra3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if(utf8_encode($infos["respuesta"]) == $r3){                                                                              
                 $rango=$rango+1;                                                     
              }                                      
            }
            $enunciado="palabra4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                                          
                 $rango=$rango+1;                                    
              }              
            }
            $enunciado="palabra5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="palabra6";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if(utf8_encode($infos["respuesta"]) == $r6){                                                              
                 $rango=$rango+1;                                                               
              }                          
            }
            $enunciado="palabra7";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r7){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="palabra8";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if(utf8_encode($infos["respuesta"]) == $r8){                                                              
                 $rango=$rango+1;                                                                     
              }                           
            }
            $enunciado="palabra9";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r9){                                                              
                 $rango=$rango+1;                                                  
              }
            }            

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->nueve($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");            

      }
       //funcion para prueba de memoria 2-5
      public function memoria25(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4']))); 

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="color triangulo";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }

            $enunciado="puntas de la estrella";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="figura dentro del circulo";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="direccion flecha";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                       
              }
            }            

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->cuatro($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      } 

      //funcion para prueba de memoria de la semana 3 dia 1 (3-1)
      public function memoria31(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));
            $r8=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));                                    
                   
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="cantidad de circulos";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }


            $enunciado="figura amarilla";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="cuadros negros";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="cantidad de rombos";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="color que se repite";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="figura sin contacto";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="cantidad de hexagonos";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r7){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="figura de color negro";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r8){                                                              
                 $rango=$rango+1;                       
              }
            }            

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->ocho($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      //funcion para prueba de memoria de la semana 3 dia 2 (3-2)
      public function memoria32(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));                                                      
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="figura de color rojo";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }


            $enunciado="color flecha";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="figura color morado";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="color estrella";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="figura de color azul";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="figura de color gris";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                       
              }
            }                      

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->seis($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      //funcion para prueba de memoria 3-3
      public function memoria33(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));
            $r8=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));
            $r9=strtoupper($conexion->real_escape_string(strip_tags($_POST['9'])));                                
            $r10=strtoupper($conexion->real_escape_string(strip_tags($_POST['10'])));

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="numero1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                                           
                 $rango=$rango+1;                                     
              }              
            }
            $enunciado="numero2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                        
              if($infos["respuesta"]== $r2){                                                                            
                 $rango=$rango+1;                                                                      
              }                                      
            }
            $enunciado="numero3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r3){                                                                              
                 $rango=$rango+1;                                                     
              }                                      
            }
            $enunciado="numero4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                                          
                 $rango=$rango+1;                                    
              }              
            }
            $enunciado="numero5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="numero6";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                                                               
              }                          
            }
            $enunciado="numero7";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r7){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="numero8";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r8){                                                              
                 $rango=$rango+1;                                                                     
              }                           
            }
            $enunciado="numero9";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r9){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="numero10";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r10){                                                              
                 $rango=$rango+1;                                                  
              }
            }            

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->diez($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");            

      }
      //funcion para prueba de memoria 3-4
      public function memoria34(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));
            $r8=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));
            $r9=strtoupper($conexion->real_escape_string(strip_tags($_POST['9'])));                                
            $r10=strtoupper($conexion->real_escape_string(strip_tags($_POST['10'])));

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="numero1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                                           
                 $rango=$rango+1;                                     
              }              
            }
            $enunciado="numero2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                        
              if($infos["respuesta"]== $r2){                                                                            
                 $rango=$rango+1;                                                                      
              }                                      
            }
            $enunciado="numero3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r3){                                                                              
                 $rango=$rango+1;                                                     
              }                                      
            }
            $enunciado="numero4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                                          
                 $rango=$rango+1;                                    
              }              
            }
            $enunciado="numero5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="numero6";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                                                               
              }                          
            }
            $enunciado="numero7";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r7){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="numero8";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r8){                                                              
                 $rango=$rango+1;                                                                     
              }                           
            }
            $enunciado="numero9";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r9){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="numero10";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r10){                                                              
                 $rango=$rango+1;                                                  
              }
            }            

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->diez($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");            

      } 
      //funcion para prueba de memoria 3-5
      public function memoria35(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));
            $r8=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));
            $r9=strtoupper($conexion->real_escape_string(strip_tags($_POST['9'])));                                
            $r10=strtoupper($conexion->real_escape_string(strip_tags($_POST['10'])));
            $r11=strtoupper($conexion->real_escape_string(strip_tags($_POST['11'])));
            $r12=strtoupper($conexion->real_escape_string(strip_tags($_POST['12'])));
            $r13=strtoupper($conexion->real_escape_string(strip_tags($_POST['13'])));
            $r14=strtoupper($conexion->real_escape_string(strip_tags($_POST['14'])));            

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="palabra1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                                           
                 $rango=$rango+1;                                     
              }              
            }
            $enunciado="palabra2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                        
              if($infos["respuesta"]== $r2){                                                                            
                 $rango=$rango+1;                                                                      
              }                                      
            }
            $enunciado="palabra3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r3){                                                                              
                 $rango=$rango+1;                                                     
              }                                      
            }
            $enunciado="palabra4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if(utf8_encode($infos["respuesta"]) == $r4){                                                                          
                 $rango=$rango+1;                                    
              }              
            }
            $enunciado="palabra5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="palabra6";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                                                               
              }                          
            }
            $enunciado="palabra7";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r7){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="palabra8";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r8){                                                              
                 $rango=$rango+1;                                                                     
              }                           
            }
            $enunciado="palabra9";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r9){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="palabra10";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r10){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="palabra11";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r11){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="palabra12";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if(utf8_encode($infos["respuesta"]) == $r12){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="palabra13";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r13){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="palabra14";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r14){                                                              
                 $rango=$rango+1;                                                  
              }
            }            

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->catorce($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");            

      }  
      //funcion para prueba de memoria de la semana 4 dia 1 
      public function memoria41(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));
            $r8=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));
            $r9=strtoupper($conexion->real_escape_string(strip_tags($_POST['9'])));                                
            $r10=strtoupper($conexion->real_escape_string(strip_tags($_POST['10'])));                    

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="palabra1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                                           
                 $rango=$rango+1;                                     
              }              
            }
            $enunciado="palabra2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                        
              if($infos["respuesta"]== $r2){                                                                            
                 $rango=$rango+1;                                                                      
              }                                      
            }
            $enunciado="palabra3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if(utf8_encode($infos["respuesta"]) == $r3){                                                                              
                 $rango=$rango+1;                                                     
              }                                      
            }
            $enunciado="palabra4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if(utf8_encode($infos["respuesta"]) == $r4){                                                                          
                 $rango=$rango+1;                                    
              }              
            }
            $enunciado="palabra5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="palabra6";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                                                               
              }                          
            }
            $enunciado="palabra7";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r7){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="palabra8";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r8){                                                              
                 $rango=$rango+1;                                                                     
              }                           
            }
            $enunciado="palabra9";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if(utf8_encode($infos["respuesta"])== $r9){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="palabra10";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r10){                                                              
                 $rango=$rango+1;                                                  
              }
            }
                        
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->diez($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");            
      }
      //funcion para prueba de memoria de la semana 4 dia 2 (4-2)
      public function memoria42(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));                                                      
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="cantidad de rectangulos";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="colores del cuadrado";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="color de la x";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="linea que mas se repite";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="lineas verticales";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="figura del interior";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                       
              }
            }                      

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->seis($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      //funcion para prueba de memoria semana4-dia3
      public function memoria43(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));                                           
                        
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="figura1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                                           
                 $rango=$rango+1;                                     
              }              
            }
            $enunciado="figura2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                        
              if(utf8_encode($infos["respuesta"]) == $r2){                                                                            
                 $rango=$rango+1;                                                                      
              }                                      
            }
            $enunciado="figura3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if(utf8_encode($infos["respuesta"]) == $r3){                                                                              
                 $rango=$rango+1;                                                     
              }                                      
            }
            $enunciado="figura4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                                          
                 $rango=$rango+1;                                    
              }              
            }
            $enunciado="figura5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="figura6";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if(utf8_encode($infos["respuesta"]) == $r6){                                                              
                 $rango=$rango+1;                                                               
              }                          
            }
            $enunciado="figura7";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r7){                                                              
                 $rango=$rango+1;                                                   
              }
            }                       

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->siete($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");            

      }
      //funcion para prueba de memoria 4-4
      public function memoria44(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));
            $r8=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));
            $r9=strtoupper($conexion->real_escape_string(strip_tags($_POST['9'])));                                
            $r10=strtoupper($conexion->real_escape_string(strip_tags($_POST['10'])));
            $r11=strtoupper($conexion->real_escape_string(strip_tags($_POST['11'])));
            $r12=strtoupper($conexion->real_escape_string(strip_tags($_POST['12'])));          

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="palabra1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                                           
                 $rango=$rango+1;                                     
              }              
            }
            $enunciado="palabra2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                        
              if($infos["respuesta"]== $r2){                                                                            
                 $rango=$rango+1;                                                                      
              }                                      
            }
            $enunciado="palabra3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r3){                                                                              
                 $rango=$rango+1;                                                     
              }                                      
            }
            $enunciado="palabra4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if(utf8_encode($infos["respuesta"]) == $r4){                                                                          
                 $rango=$rango+1;                                    
              }              
            }
            $enunciado="palabra5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="palabra6";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                                                               
              }                          
            }
            $enunciado="palabra7";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r7){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="palabra8";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r8){                                                              
                 $rango=$rango+1;                                                                     
              }                           
            }
            $enunciado="palabra9";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r9){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="palabra10";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if(utf8_encode($infos["respuesta"]) == $r10){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="palabra11";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r11){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="palabra12";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r12){                                                              
                 $rango=$rango+1;                                                  
              }
            }                      

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->doce($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");            
      }
      //funcion para prueba de memoria semana 4 dia 5 
      public function memoria45(){
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
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));
            $r8=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));
            $r9=strtoupper($conexion->real_escape_string(strip_tags($_POST['9'])));                                
            $r10=strtoupper($conexion->real_escape_string(strip_tags($_POST['10'])));

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="numero1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                                           
                 $rango=$rango+1;                                     
              }              
            }
            $enunciado="numero2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                        
              if($infos["respuesta"]== $r2){                                                                            
                 $rango=$rango+1;                                                                      
              }                                      
            }
            $enunciado="numero3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r3){                                                                              
                 $rango=$rango+1;                                                     
              }                                      
            }
            $enunciado="numero4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                                          
                 $rango=$rango+1;                                    
              }              
            }
            $enunciado="numero5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="numero6";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                                                               
              }                          
            }
            $enunciado="numero7";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r7){                                                              
                 $rango=$rango+1;                                                   
              }
            }
            $enunciado="numero8";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                                         
              if($infos["respuesta"] == $r8){                                                              
                 $rango=$rango+1;                                                                     
              }                           
            }
            $enunciado="numero9";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r9){                                                              
                 $rango=$rango+1;                                                  
              }
            }
            $enunciado="numero10";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r10){                                                              
                 $rango=$rango+1;                                                  
              }
            }            

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->diez($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");            
      } 
    }
    $conexion=new Conexion();
    $conexion=$conexion->conectar();

    $metodo=$conexion->real_escape_string(strip_tags($_GET['value']));
    $metodo=array('Memoria',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }

?>