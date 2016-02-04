<?php
include_once ("conexion.php");
include_once ("query.php");
class Actividad{
    //esta clase hace peticiones a la clase Query que es la encargada de realizar todas las consultas solicitadas deda cada metodo.
    private $table="actividad";
        
    public function getActividad($conexion, $tipo, $enunciado, $dia, $semana){//función para extraer los datos de una actividad en especifico  
        $query=new Query();                                                    //muy utilizada para extraer las respuestas 
        return $query->getActividad($this->table,$conexion, $tipo, $enunciado, $dia, $semana);
    }   
    public function getActByDay($conexion, $tipo, $dia, $semana){//función para extraer los datos de una actividad en especifico
        $query=new Query();                                      //se utiliza para extraer los enunciados de la tabla
        return $query->getActividadByDay($this->table,$conexion, $tipo, $dia, $semana);
    }
     
}
?>