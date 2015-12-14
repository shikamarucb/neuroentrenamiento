<?php
    include_once ("../../Modelo/usuario.php");
    include_once ("../../Modelo/control.php");
    include_once ("../../Modelo/conexion.php"); 
    include_once ("../../Modelo/resultado.php");

    Class Calificar{

    	private $rango;
    	private $tipo;
    	private $email;
    	private $dia;
    	private $semana;
        private $contador;

    	function __construct($rango,$tipo,$email,$dia,$semana, $contador){  
             $this->rango=$rango;  	
             $this->tipo=$tipo;
             $this->email=$email;
             $this->dia=$dia;
             $this->semana=$semana;
             $this->contador=$contador;
    	}

    	public function seis($conexion){
    		// se calcula la calificación
    		$puntos=0;
		    if($this->rango != 0){ 
		      if( $this->rango < 4){
		         $puntos=0.5;            
		      }else{ 
		        if($this->rango > 3 && $this->rango < 6){
		          $puntos=0.75;               
		        }else{
		            $puntos=1;
		        }
		      }            
		    }                       
            $resultado=new Resultado();
            $resultado->addResultado($conexion, $this->email, $this->tipo, $puntos, $this->dia, $this->semana);            
            $this->contador=$this->contador+1;            
            if($this->contador>2){
               $this->contador=0;
               $this->dia=$dia+1;
            }
            if($this->dia>5){
                $this->dia=1;
                $this->semana=$this->semana+1;
            }
            $control=new Control($this->email);            
            $control->upControl($conexion, $this->contador, $this->dia, $this->semana);
    	}

    }
?>