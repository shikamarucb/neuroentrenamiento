<?php
    include_once ("../../../Modelo/usuario.php");
    include_once ("../../../Modelo/control.php");
    include_once ("../../../Modelo/conexion.php");
    include_once ("../../../Modelo/actividad.php");      

    class ActividadCont{

    	public function enunciado($tipo){//funcion para obtener los enunciados de ciertas actividades
    		
    		$conexion=new Conexion();
            $conexion=$conexion->conectar();

            $email=$_SESSION['session'];
            $control= new Control($email);
            $resultado=$control->getControl($conexion);//se obtiene el  dia y semana en donde se encuentra el usuario 
            if ($resultado->num_rows !=0){            //para así mismo obtener las actividades requeridas
                $datos=$resultado->fetch_array(MYSQLI_ASSOC);
                $dia= $datos["dia_usuario"];
                $semana=$datos["semana_usuario"];                              
            }

            $actividad=new Actividad();
            return $result=$actividad->getActByDay($conexion, $tipo, $dia, $semana);            
            //return $result;            		             	
                                  
    	}
    	
    } 