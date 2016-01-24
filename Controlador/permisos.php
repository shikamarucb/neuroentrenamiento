<?php
    include_once ("../../../Modelo/usuario.php");   
    include_once ("../../../Modelo/conexion.php");
    include_once ("../../../Modelo/resultado.php");
    include_once ("../../../Modelo/control.php");

   
   Class Permisos{
       public function verificarUser(){
       	    if(isset($_SESSION['session'])){
       	    	$email=$_SESSION['session'];
       	    	$conexion=new Conexion();
                $conexion=$conexion->conectar();
                $usuario=new Usuario();
                $resultado=$usuario->getUsersByEmail($conexion, $email);
                if($resultado->num_rows !=0 ){
                	$datos=$resultado->fetch_array(MYSQLI_ASSOC);
                	$roll=$datos["roll"];
                	if($roll==3 || $roll ==1){
                		return true;
                	}else{
                		echo "No tiene permisos para acceder";                	}
                }       	    	
       	    }else{
       	    	echo "Debes iniciar Sesion";
       	    }       	                
        
       }
       public function accederPruebas($tipo){          
          date_default_timezone_set("America/Bogota");
          $fechaAct= date("Y-m-d");
          $email=$_SESSION['session'];
          $conexion=new Conexion();
          $conexion=$conexion->conectar();

          $control=new Control($email);
          $data=$control->getControl($conexion);
          $datos=$data->fetch_array(MYSQLI_ASSOC);
          $dia=$datos["dia_usuario"];
          $semana=$datos["semana_usuario"];
          $contador=$datos["contador_actividad"];

          $resultado=new Resultado();
          $result=$resultado->getResult($conexion, $email, $dia, $semana);
          $informs=$result->fetch_all(MYSQLI_ASSOC);
          $i=0;
          if($fechaAct != $datos["fecha"] || $result->num_rows != 0 ){
            foreach ($informs as $info) {
                if($info['prueba_tipo'] == $tipo){
                   $i=$i+1;
                }
            }
            if($i==0){
              return true;
            }else{
              echo "No puedes realizar esta prueba de nuevo";
            }
          }else{
            echo "No puedes hacer mas pruebas por el dia de hoy. Por favor regresa mañana";
          } 
       } 

   }
?>