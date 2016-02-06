<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/conexion.php");
    include_once ("../../Modelo/actividad.php");
    include_once ("calificar.php");   

    class Matematicas{
    	public function mainMath(){//funcion para la mayoria de las pruebas de matemáticas.
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
            
            $tipo="matematicas";
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

            $i=1;          
            $actividad=new Actividad();
            $rtas=$actividad->getActByDay($conexion,$tipo,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rtas->num_rows != 0){                                               
              if($infos=$rtas->fetch_all(MYSQLI_ASSOC)){                            
                foreach ($infos as $info) {                                    
                    if($info["respuesta"] == $conexion->real_escape_string(strip_tags($_POST[$i]))) {                                                              
                       $rango=$rango+1;                       
                    }
                    $i=$i+1;
                }
              }
            }            
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->veinte($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
    	}
      //funcion para prueba de matematicas semana2-dia 4
      public function matematicas24(){
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

            $tipo="matematicas";
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
            $enunciado="conjunto1";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="conjunto2";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="conjunto3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="conjunto4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                       
              }
            }            
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->cuatroMate($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      //función para evaluar la prueba de matmátcas semana 2- dia 5 
      public function matematicas25(){
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

            $tipo="matematicas";
            $puntos=0;
            $rango=0;        
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $r1=$conexion->real_escape_string(strip_tags($_POST['1']));
            $r2=$conexion->real_escape_string(strip_tags($_POST['2']));
            $r3=$conexion->real_escape_string(strip_tags($_POST['3']));
            $r4=$conexion->real_escape_string(strip_tags($_POST['4']));
            $r5=$conexion->real_escape_string(strip_tags($_POST['5']));
            $r6=$conexion->real_escape_string(strip_tags($_POST['6']));            
                   
            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);
            if ($resultado->num_rows !=0){
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];
                $contador=$datos["contador_actividad"];               
            }
            $enunciado="16";            
            $actividad=new Actividad();
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r1){                                                              
                 $rango=$rango+1;                      
              }
            }
            $enunciado="3";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r2){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="14";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r3){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="6";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r4){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="4";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r5){                                                              
                 $rango=$rango+1;                       
              }
            }
            $enunciado="17";                        
            $rta=$actividad->getActividad($conexion,$tipo, $enunciado,$dia,$semana);//SE CONSULTA LA BD PARA EXTRAER DATOS
            if($rta->num_rows != 0){                                               
              $infos=$rta->fetch_array(MYSQLI_ASSOC);                                                             
              if($infos["respuesta"] == $r6){                                                              
                 $rango=$rango+1;                       
              }
            }            
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador,$tiempo);
            $calificacion->seisMate($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
      //función para evaluar la prueba de matmátcas semana 3-dia 3 
      public function matematicas33(){
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

            $tipo="matematicas";
            $puntos=0;
            $rango=0;        
            $conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $r1=$conexion->real_escape_string(strip_tags($_POST['1']));
            $r2=$conexion->real_escape_string(strip_tags($_POST['2']));
            $r3=$conexion->real_escape_string(strip_tags($_POST['3']));
            $r4=$conexion->real_escape_string(strip_tags($_POST['4']));
            $r5=$conexion->real_escape_string(strip_tags($_POST['5']));
            $r6=$conexion->real_escape_string(strip_tags($_POST['6'])); 
            $r7=$conexion->real_escape_string(strip_tags($_POST['7']));
            $r8=$conexion->real_escape_string(strip_tags($_POST['8']));
            $r9=$conexion->real_escape_string(strip_tags($_POST['9']));
            $r10=$conexion->real_escape_string(strip_tags($_POST['10']));           
                   
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
              $enunciado="numero".$i;                          
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
            $calificacion->diezMate($conexion);
            header ("Location: ../../vista/pruebas/msg/finmsg.html");
      }
    	
    }
    $conexion=new Conexion();
    $conexion=$conexion->conectar();

    $metodo=$conexion->real_escape_string(strip_tags($_GET['value']));     
    $metodo=array('Matematicas',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }
?> 