<?php
    include_once ("../../../Modelo/usuario.php");
    include_once ("../../../Modelo/control.php");
    include_once ("../../../Modelo/conexion.php");

   class DatosControl{
        
        public function getControl($email){
            $conexion=new Conexion();
            $conexion=$conexion->conectar();            

            $datos=new Control($email);            
            $info= $datos->getControl($conexion);
            return $resultado=$info->fetch_array(MYSQLI_ASSOC);
            
        }

        public function finalizar($tipo){
            switch ($tipo) {
                case 'atencion':
                    
                    break;
                case 'memoria':
                    # code...
                    break;
                case 'matematicas':
                    # code...
                    break;
                
            }
        }
                    
    }    
?>