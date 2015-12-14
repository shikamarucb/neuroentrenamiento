<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/conexion.php");
    include_once ("../../Modelo/actividad.php");
    include_once ("calificar.php");

    class Memoria{    	

    	public function memoria11(){
            $tipo="memoria";
            $puntos=0;
            $rango=0;
    		session_start();
    		$conexion=new Conexion();
            $conexion=$conexion->conectar();
            
            $fruta1=$conexion->real_escape_string(strip_tags($_POST['fruta1']));
            $fruta2=$conexion->real_escape_string(strip_tags($_POST['fruta2']));
            $fruta3=$conexion->real_escape_string(strip_tags($_POST['fruta3']));
            $herra1=$conexion->real_escape_string(strip_tags($_POST['herra1']));
            $herra2=$conexion->real_escape_string(strip_tags($_POST['herra2']));
            $herra3=$conexion->real_escape_string(strip_tags($_POST['herra3']));
        
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
            $calificacion=new Calificar($rango,$tipo,$email,$dia,$semana, $contador);
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