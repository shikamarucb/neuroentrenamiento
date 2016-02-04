<?php
include_once ("conexion.php");
include_once ("query.php");
class Resultado{
    //esta clase hace peticiones a la clase Query que es la encargada de realizar todas las consultas solicitadas deda cada metodo.
    private $table="resultado";   
        
    public function addResultado($conexion, $email, $tipo, $puntos, $dia, $semana, $tiempo){//se agrega los datos por cada prueba realizada
        $query=new Query();
        $query->adResultado($this->table,$conexion, $email, $tipo, $puntos, $dia, $semana, $tiempo);

    }

    public function getResult($conexion, $email, $dia, $semana){//se obtienen los datos pertenecientes a un usuario por dia y semana especifica
        $query=new Query();
        return $query->getResult($this->table,$conexion, $email, $dia, $semana);
    }

    public function getResultByWeek($conexion, $email, $semana){//se obtienen los datos agrupados por una semana en especifica
    	$query=new Query();
    	return $query->getResultByWeek($this->table,$conexion, $email, $semana);
    }

    public function getResultBySex($conexion,$semana){//se obtienen los datos agrupados por sexo 
        $query=new Query();
    	return $query->getResultBysex($conexion, $semana);
    }

    public function getResultByAge($conexion, $semana){//se obtienen los datos agrupados por edades 
        $query=new Query();
        return $query->getResultByAge($conexion, $semana);
    }

    public function getResultByCourse($conexion, $semana){//se obtienen los datos agrupados por cursos
        $query=new Query();
        return $query->getResultByCourse($conexion, $semana);
    }

    public function getResultByEmail($conexion, $email){//se obtienen los datos pertenecientes a un usuario
        $query=new Query();
        return $query->getResultByEmail($this->table,$conexion, $email);
    }

    public function deleteResult($conexion, $email){//se elimana un usuario por inactividad
        $query=new Query();
        $query->deleteResult($conexion, $this->table, $email);
    }

    public function getResultByAverage($conexion, $email){//se obtienen los datos para generar una grafica que promedie todas las semanas de la cartilla
        $query=new Query();
        return $query->getResultByAverage($conexion, $email);
    }
    
}
?>