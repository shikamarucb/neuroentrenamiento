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
            echo "Fin de la prueba";
    	}
    	
    }
     $metodo=$_GET['value'];
    $metodo=array('Matematicas',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }
?> 