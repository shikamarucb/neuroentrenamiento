<?php
    include_once ("../../../Modelo/usuario.php");
    include_once ("../../../Modelo/control.php");
    include_once ("../../../Modelo/conexion.php");

   class DatosControl{
        
        public function getControl($email){//SE OBTIENEN LOS DATOS DE LA TABLA CONTROL A PARTIR DEL EMAIL.
            $conexion=new Conexion();
            $conexion=$conexion->conectar();            

            $datos=new Control($email);            
            $info= $datos->getControl($conexion);
            return $resultado=$info->fetch_array(MYSQLI_ASSOC);
            
        }

        
                    
    }    
?>