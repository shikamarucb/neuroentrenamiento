<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/conexion.php");

   class Administradores{        

        public function listar(){            
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $admin=new Usuario();
            return $admin->getAllAdmins($conexion);
            
        }
        public function getAdminByEmail($email){
        	$conexion=new Conexion();
            $conexion=$conexion->conectar();            

            $admin=new Usuario();
            return $admin->getUsersByEmail($conexion,$email);
            
        }
                    
    }    
?>