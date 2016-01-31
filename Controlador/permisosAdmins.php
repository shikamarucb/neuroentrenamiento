<?php
    include_once ("../../Modelo/usuario.php");   
    include_once ("../../Modelo/conexion.php");
   
   Class PermisosAdmins{
       
       public function verificarAdmin(){
       	    if(isset($_SESSION['session'])){
       	    	$email=$_SESSION['session'];
       	    	$conexion=new Conexion();
                $conexion=$conexion->conectar();
                $usuario=new Usuario();
                $resultado=$usuario->getUsersByEmail($conexion, $email);
                if($resultado->num_rows !=0 ){
                	$datos=$resultado->fetch_array(MYSQLI_ASSOC);
                	$roll=$datos["roll"];
                	if($roll==2 || $roll ==1){
                		return true;
                	}else{
                		header ("Location: ../pruebas/msg/permsg.html");                	}
                }       	    	
       	    }else{
       	    	header ("Location: ../pruebas/msg/loginmsg.html");
       	    }       	                
        
       }
       public function verificarSuperAdmin(){
       	    if(isset($_SESSION['session'])){
       	    	$email=$_SESSION['session'];
       	    	$conexion=new Conexion();
                $conexion=$conexion->conectar();
                $usuario=new Usuario();
                $resultado=$usuario->getUsersByEmail($conexion, $email);
                if($resultado->num_rows !=0 ){
                	$datos=$resultado->fetch_array(MYSQLI_ASSOC);
                	$roll=$datos["roll"];
                	if($roll ==1){
                		return true;
                	}else{
                		header ("Location: ../pruebas/msg/permsg.html"); ;                	}
                }       	    	
       	    }else{
       	    	header ("Location: ../pruebas/msg/loginmsg.html");
       	    }       	                
        
       }
   }
?>