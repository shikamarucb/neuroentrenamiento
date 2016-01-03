<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/conexion.php");

   class UsuariosAdmin{

        public function listar(){            
            $conexion=new Conexion();
            $conexion=$conexion->conectar();

            $user=new Usuario();
            return $user->getAllUsers($conexion);
            
        }
        public function getUserByEmail($email){
        	$conexion=new Conexion();
            $conexion=$conexion->conectar();            

            $user=new Usuario();
            return $user->getUsersByEmail($conexion,$email);
            
        }
        public function getControl($email){
            $conexion=new Conexion();
            $conexion=$conexion->conectar();            

            $datos=new Control($email);
            return $datos->getControl($conexion);
            
        }
                    
    }    
?>