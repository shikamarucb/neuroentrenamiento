<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/conexion.php");

   class Administradores{        

        public function listar(){        //FUNCION PARA LISTAR LOS ADMINISTRADORES REGISTRADOS    
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $admin=new Usuario();
            return $admin->getAllAdmins($conexion);
            
        }
        public function getAdminByEmail($email){//SE OBTIENE UN ADMINISTRADOR APARTIR DEL EMAIL.
        	$conexion=new Conexion();
            $conexion=$conexion->conectar();            

            $admin=new Usuario();
            return $admin->getUsersByEmail($conexion,$email);
            
        }
                    
    }    
?>