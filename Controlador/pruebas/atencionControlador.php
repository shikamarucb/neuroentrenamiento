<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/conexion.php");
    include_once ("../../Modelo/actividad.php");
    include_once ("calificar.php");   

    class Atencion{

    	public function atencion11(){//funcion para la prueba de atencion del dia 1 semana 1 
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
            
            $tipo="atencion";
            $puntos=0;
            $rango=0;    		
    		    $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $l1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));//se capturan las letas que forman
            $l2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));//la primera palabra del ejercicio. 
            $l3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));//y se concatenan
            $l4=strtoupper($conexion->real_escape_string(strip_tags($_POST['4'])));
            $l5=strtoupper($conexion->real_escape_string(strip_tags($_POST['5'])));
            $l6=strtoupper($conexion->real_escape_string(strip_tags($_POST['6'])));
            $palabra1=$l1.$l2.$l3.$l4.$l5.$l6;

            $l1=strtoupper($conexion->real_escape_string(strip_tags($_POST['7'])));//se capturan las  letas que forman
            $l2=strtoupper($conexion->real_escape_string(strip_tags($_POST['8'])));//la segunda palabra del ejercicio. 
            $l3=strtoupper($conexion->real_escape_string(strip_tags($_POST['9'])));//y se concatenan
            $l4=strtoupper($conexion->real_escape_string(strip_tags($_POST['10'])));
            $l5=strtoupper($conexion->real_escape_string(strip_tags($_POST['11'])));
            $palabra2=$l1.$l2.$l3.$l4.$l5;

            $l1=strtoupper($conexion->real_escape_string(strip_tags($_POST['12'])));//se capturan las primeras letas que forman
            $l2=strtoupper($conexion->real_escape_string(strip_tags($_POST['13'])));//la primera palabra del ejercicio. 
            $l3=strtoupper($conexion->real_escape_string(strip_tags($_POST['14'])));//y se concatenan
            $l4=strtoupper($conexion->real_escape_string(strip_tags($_POST['15'])));
            $l5=strtoupper($conexion->real_escape_string(strip_tags($_POST['16'])));
            $l6=strtoupper($conexion->real_escape_string(strip_tags($_POST['17'])));
            $l7=strtoupper($conexion->real_escape_string(strip_tags($_POST['18'])));
            $l8=strtoupper($conexion->real_escape_string(strip_tags($_POST['19'])));
            $l9=strtoupper($conexion->real_escape_string(strip_tags($_POST['20'])));
            $palabra3=$l1.$l2.$l3.$l4.$l5.$l6.$l7.$l8.$l9;

            $email=$_SESSION['session'];//EN TODAS LAS FUNCIONES DEL CONTROLADOR, ESTA SECCION DE CODIGO SE EXTRAEN DATOS DE LA TABLA CONTROL PERTENECIENTES A UN EMAIL QUE INICIO SESION. 
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);//EN TODAS LAS FUNCIONES DEL CONTROLADOR, ESTA SECCION DE CODIGO SE EXTRAEN LOS DIAS Y LA SEMANA  DE LA TABLA CONTROL PARA SU UTILIZACION A LA HORA DE CALIFICAR LAS PRUEBAS Y OTROS. 
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="pais1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER LAS RESPUESTAS CORRECTAS.
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $palabra1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="pais2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $palabra2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="pais3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $palabra3){                                                              
                 $rango=$rango+1;                      
              }
            }

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->tres($conexion);          

            header ("Location: ../../vista/pruebas/msg/finmsg.html");             
    	}
      public function atencion12(){//funcion para la prueba de atencion del dia 2 semana 1
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
            
            $tipo="atencion";
            $puntos=0;
            $rango=0;       
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $num1=strtoupper($conexion->real_escape_string(strip_tags($_POST['ochos'])));
            $num2=strtoupper($conexion->real_escape_string(strip_tags($_POST['seis']))); 
            $rango=$num1+$num2;

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }                        

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->diez($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");           
      }
      public function atencion13(){//funcion para la prueba de atencion del dia 3 semana 1 
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
            
            $tipo="atencion";
            $puntos=0;
            $rango=0;       
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['r1'])));//se capturan las letas que forman
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['r2'])));//la primera palabra del ejercicio. 
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['r3'])));//y se concatenan
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['r4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['r5'])));

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="trabaja mas tiempo";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="lugares que visitan";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="cantidad de hijos";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="nombre esposa";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="profesion";                        
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
      public function atencion14(){//funcion para la prueba de atencion del dia 4 semana 1 
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
            
            $tipo="atencion";
            $puntos=0;
            $rango=0;       
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['r1'])));
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['r2']))); 
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['r3'])));
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['r4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['r5'])));
            $r6=strtoupper($conexion->real_escape_string(strip_tags($_POST['r6'])));
            $r7=strtoupper($conexion->real_escape_string(strip_tags($_POST['r7'])));
            $r8=strtoupper($conexion->real_escape_string(strip_tags($_POST['r8']))); 
            $r9=strtoupper($conexion->real_escape_string(strip_tags($_POST['r9'])));
            $r10=strtoupper($conexion->real_escape_string(strip_tags($_POST['r10'])));            

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="semestre protagonista";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if(utf8_encode($infos["respuesta"])== $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="carrera protagonista";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="nombre protagonista";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="meta protagonista";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="respuesta editorial";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="nombre editorial";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="nombre novela";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if(utf8_encode($infos["respuesta"]) == $r7){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="cantidad de 5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r8){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="cantidad de 7";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r9){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="cantidad de 1";                        
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
      public function atencion15(){//funcion para la prueba de atencion del dia 5 semana 1 
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
            
            $tipo="atencion";
            $puntos=0;
            $rango=0;       
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['r1'])));//se capturan las letas que forman
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['r2'])));//la primera palabra del ejercicio. 
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['r3'])));//y se concatenan
            $r4=strtoupper($conexion->real_escape_string(strip_tags($_POST['r4'])));
            $r5=strtoupper($conexion->real_escape_string(strip_tags($_POST['r5'])));

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="repite en circulo";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD 
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="cuantas veces";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="mal escritas";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="ido";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="esa";                        
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
      public function atencion21(){//funcion para la prueba de atencion del dia 1 semana 2 
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
            
            $tipo="atencion";
            $puntos=0;
            $rango=0;
            $aciertos=0;       
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $cant1=strtoupper($conexion->real_escape_string(strip_tags($_POST['secuencia1'])));
            $cant2=strtoupper($conexion->real_escape_string(strip_tags($_POST['secuencia2']))); 
            $cant3=strtoupper($conexion->real_escape_string(strip_tags($_POST['secuencia3'])));
            $cant4=strtoupper($conexion->real_escape_string(strip_tags($_POST['secuencia4'])));
            $cant5=strtoupper($conexion->real_escape_string(strip_tags($_POST['secuencia5'])));
                   
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="secuencia1";            
            $actividad=new Actividad();
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list1'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $aciertos=$aciertos+1;                       
                    }
                  }                                                  
                }
              }
            }
            if ($aciertos==2) {
              $rango=$rango+1;
            }
            $enunciado="cantidad secuencia1";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cant1){                                                              
                 $rango=$rango+1;                      
              }
            }
            //hasta aca se evalua la 1° secuencia...
            $aciertos=0;
            $enunciado="secuencia2";                        
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list2'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $aciertos=$aciertos+1;                       
                    }
                  }                                                  
                }
              }
            }
            if ($aciertos==3) {
              $rango=$rango+1;
            }
            $enunciado="cantidad secuencia2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cant2){                                                              
                 $rango=$rango+1;                      
              }
            }
            //hasta aca se evalua la 2° secuencia...
            $aciertos=0;
            $enunciado="secuencia3";                        
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list3'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $aciertos=$aciertos+1;                       
                    }
                  }                                                  
                }
              }
            }
            if ($aciertos==1) {
              $rango=$rango+1;
            }
            $enunciado="cantidad secuencia3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cant3){                                                              
                 $rango=$rango+1;                      
              }
            }
            //hasta aca se evalua la 3° secuencia...
            $aciertos=0;
            $enunciado="secuencia4";                        
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list4'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $aciertos=$aciertos+1;                       
                    }
                  }                                                  
                }
              }
            }
            if ($aciertos==1) {
              $rango=$rango+1;
            }
            $enunciado="cantidad secuencia4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cant4){                                                              
                 $rango=$rango+1;                      
              }
            }
            //hasta aca se evalua la 4° secuencia...
            $aciertos=0;
            $enunciado="secuencia5";                        
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list5'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $aciertos=$aciertos+1;                       
                    }
                  }                                                  
                }
              }
            }
            if ($aciertos==3) {
              $rango=$rango+1;
            }
            $enunciado="cantidad secuencia5";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cant5){                                                              
                 $rango=$rango+1;                      
              }
            }
            //hasta aca se evalua la 5° secuencia...
            
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->diez($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");           
      }
       public function atencion22(){
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

            $tipo="atencion";
            $puntos=0;
            $rango=0;        
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));                                                                  
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="secuencia siguiente";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }                     

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->uno($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
       public function atencion23(){
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

            $tipo="atencion";
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
            $enunciado="secuencia1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="secuencia2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="secuencia3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="secuencia4";                        
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
      public function atencion24(){
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

            $tipo="atencion";
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
              if($infos["respuesta"] == $r2){                                                              
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

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->cinco($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      public function atencion25(){
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

            $tipo="atencion";
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
            $r15=strtoupper($conexion->real_escape_string(strip_tags($_POST['15'])));
            $r16=strtoupper($conexion->real_escape_string(strip_tags($_POST['16'])));
            $r17=strtoupper($conexion->real_escape_string(strip_tags($_POST['17'])));
            $r18=strtoupper($conexion->real_escape_string(strip_tags($_POST['18'])));
            $r19=strtoupper($conexion->real_escape_string(strip_tags($_POST['19'])));
            $r20=strtoupper($conexion->real_escape_string(strip_tags($_POST['20'])));

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="palabras";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              while($infos=$rta->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {                                    
                    if($info == $r1){                                                              
                       $rango=$rango+1;                       
                    }elseif($info == $r2){                                                                             
                       $rango=$rango+1;
                    }elseif($info == $r3){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r4){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r5){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r6){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r7){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r8){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r9){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r10){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r11){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r12){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r13){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r14){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r15){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r16){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r17){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r18){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r19){                                                            
                       $rango=$rango+1;
                    }elseif($info == $r20){                                                            
                       $rango=$rango+1;
                    }                                                  
                }
              }
            }                     

            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->cuatro($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      public function atencion31(){//funcion para la prueba de atencion del dia 1 semana 3 
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
            
            $tipo="atencion";
            $puntos=0;
            $rango=0;
            $aciertos=0;       
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $cant1=strtoupper($conexion->real_escape_string(strip_tags($_POST['secuencia1'])));
            $cant2=strtoupper($conexion->real_escape_string(strip_tags($_POST['secuencia2']))); 
            $cant3=strtoupper($conexion->real_escape_string(strip_tags($_POST['secuencia3'])));
            $cant4=strtoupper($conexion->real_escape_string(strip_tags($_POST['secuencia4'])));            
                   
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="secuencia1";            
            $actividad=new Actividad();
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list1'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $aciertos=$aciertos+1;                       
                    }
                  }                                                  
                }
              }
            }
            if ($aciertos==1) {
              $rango=$rango+1;
            }
            $enunciado="cantidad secuencia1";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cant1){                                                              
                 $rango=$rango+1;                      
              }
            }
            //hasta aca se evalua la 1° secuencia...
            $aciertos=0;
            $enunciado="secuencia2";                        
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list2'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $aciertos=$aciertos+1;                       
                    }
                  }                                                  
                }
              }
            }
            if ($aciertos==3) {
              $rango=$rango+1;
            }
            $enunciado="cantidad secuencia2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cant2){                                                              
                 $rango=$rango+1;                      
              }
            }
            //hasta aca se evalua la 2° secuencia...
            $aciertos=0;
            $enunciado="secuencia3";                        
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list3'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $aciertos=$aciertos+1;                       
                    }
                  }                                                  
                }
              }
            }
            if ($aciertos==2) {
              $rango=$rango+1;
            }
            $enunciado="cantidad secuencia3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cant3){                                                              
                 $rango=$rango+1;                      
              }
            }
            //hasta aca se evalua la 3° secuencia...
            $aciertos=0;
            $enunciado="secuencia4";                        
            $figuras=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($figuras->num_rows != 0){                                               
              while($infos=$figuras->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list4'] as $select=>$figura) {                                                        
                    if($info == $figura){                                                              
                       $aciertos=$aciertos+1;                       
                    }
                  }                                                  
                }
              }
            }
            if ($aciertos==4) {
              $rango=$rango+1;
            }
            $enunciado="cantidad secuencia4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $cant4){                                                              
                 $rango=$rango+1;                      
              }
            }
            //hasta aca se evalua la 4° secuencia...            
            
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->ocho($conexion);            
            header ("Location: ../../vista/pruebas/msg/finmsg.html");          
      }
      public function atencion32(){//funcion para la prueba de atencion del dia 2 semana 3 
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
            
            $tipo="atencion";
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
            $i=1;
            $actividad=new Actividad();
            while($i < 11){
              $enunciado="imagen".$i;                          
              $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
              if($rta->num_rows != 0){                                               
                $infos=$rta->fetch_array(MYSQLI_ASSOC);
                switch ($i) {
                   case '1':
                     if($infos["respuesta"] == $r1){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '2':
                     if($infos["respuesta"] == $r2){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '3':
                     if($infos["respuesta"] == $r3){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '4':
                     if($infos["respuesta"] == $r4){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '5':
                     if($infos["respuesta"] == $r5){                                                              
                         $rango=$rango+1;                      
                      }
                     break; 
                   case '6':
                     if($infos["respuesta"] == $r6){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '7':
                     if($infos["respuesta"] == $r7){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '8':
                     if($infos["respuesta"] == $r8){                                                              
                         $rango=$rango+1;                      
                      }
                     break; 
                   case '9':
                     if($infos["respuesta"] == $r9){                                                              
                         $rango=$rango+1;                      
                      }
                     break; 
                   case '10':
                     if($infos["respuesta"] == $r10){                                                              
                         $rango=$rango+1;                      
                      }
                     break;                           
                 }                                                                             
              }
              $i=$i+1;
            }           
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->diez($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");          
      }
      public function atencion33(){//funcion para la prueba de atencion del dia 3 semana 3 
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
            
            $tipo="atencion";
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
            $i=1;
            $actividad=new Actividad();
            while($i < 11){
              $enunciado="imagen".$i;                          
              $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
              if($rta->num_rows != 0){                                               
                $infos=$rta->fetch_array(MYSQLI_ASSOC);
                switch ($i) {
                   case '1':
                     if($infos["respuesta"] == $r1){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '2':
                     if($infos["respuesta"] == $r2){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '3':
                     if($infos["respuesta"] == $r3){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '4':
                     if($infos["respuesta"] == $r4){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '5':
                     if($infos["respuesta"] == $r5){                                                              
                         $rango=$rango+1;                      
                      }
                     break; 
                   case '6':
                     if($infos["respuesta"] == $r6){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '7':
                     if($infos["respuesta"] == $r7){                                                              
                         $rango=$rango+1;                      
                      }
                     break;
                   case '8':
                     if($infos["respuesta"] == $r8){                                                              
                         $rango=$rango+1;                      
                      }
                     break; 
                   case '9':
                     if($infos["respuesta"] == $r9){                                                              
                         $rango=$rango+1;                      
                      }
                     break; 
                   case '10':
                     if($infos["respuesta"] == $r10){                                                              
                         $rango=$rango+1;                      
                      }
                     break;                           
                 }                                                                             
              }
              $i=$i+1;
            }           
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->diez($conexion);          
            header ("Location: ../../vista/pruebas/msg/finmsg.html");           
      }
       public function atencion34(){//funcion para la prueba de atencion del dia 4 semana 3
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
            
            $tipo="atencion";
            $puntos=0;
            $rango=0;       
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));//se capturan las letas que forman
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));//la primera palabra del ejercicio. 
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));//y se concatenan
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
            $rango=$r1+$r2+$r3+$r4;
            /*
            $enunciado="puntos rojos";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="puntos negros";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="puntos azules";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="puntos morados";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                      
              }
            }*/                        
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->diez($conexion); //se evaluarian 4 de la manera comentada XD ..           
            header ("Location: ../../vista/pruebas/msg/finmsg.html");           
      }
      public function atencion35(){//funcion para la prueba de atencion del dia 5 semana 3
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
            
            $tipo="atencion";
            $puntos=0;
            $rango=0;       
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $r1=strtoupper($conexion->real_escape_string(strip_tags($_POST['1'])));//se capturan las letas que forman
            $r2=strtoupper($conexion->real_escape_string(strip_tags($_POST['2'])));//la primera palabra del ejercicio. 
            $r3=strtoupper($conexion->real_escape_string(strip_tags($_POST['3'])));//y se concatenan
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
            $rango=$r1+$r2+$r3+$r4;
            /*
            $enunciado="signo pesos";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="unos";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="ochos";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="signo pregunta";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                      
              }
            } */                       
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->veinteAtencion($conexion);   //se evaluarian 4.         
            header ("Location: ../../vista/pruebas/msg/finmsg.html");           
      }
      public function atencion41(){
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

            $tipo="atencion";
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
            $rango=$r1+$r2+$r3+$r4;
            /*
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
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="figura3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
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
            } */                                    
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->nueve($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
       public function atencion42(){
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

            $tipo="atencion";           
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
            $rango=$r1+$r2+$r3+$r4;
                                                
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->ocho($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      public function atencion43(){
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

            $tipo="atencion";
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
            $enunciado="serie1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="serie2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="serie3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="serie4";                        
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
      public function atencion44(){//funcion para la prueba de atencion del dia 1 semana 2 
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
            
            $tipo="atencion";
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
            $enunciado="utiles";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);
            if($rta->num_rows != 0){                                               
              while($infos=$rta->fetch_array(MYSQLI_ASSOC)){                            
                foreach ($infos as $clave=>$info) {
                  foreach ($_POST['check_list'] as $select=>$utiles) {                                                        
                    if($info == $utiles){                                                              
                       $rango=$rango+1;                       
                    }
                  }                                                  
                }
              }
            }            
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->cinco($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");           
      }
      public function atencion45(){
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

            $tipo="atencion";
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
            $enunciado="secuencia1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="secuencia2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="secuencia3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="secuencia4";                        
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

    }
    //AL LLAMAR EL CONTROLADOR SE ENVIA POR METODO GET EL NOMBRE DE LA FUNCION A INVOCAR, SE RECIBE Y SI EXISTE SE INVOCA DESDE ESTA SECCION DE CODIGO. 
    $conexion=new Conexion();
    $conexion=$conexion->conectar();

    $metodo=$conexion->real_escape_string(strip_tags($_GET['value']));
    $metodo=array('Atencion',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }

?>