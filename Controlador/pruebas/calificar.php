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
      private $tiempo;

    	function __construct($rango,$tipo,$email,$dia,$semana, $contador,$tiempo){  
             $this->rango=$rango;  	
             $this->tipo=$tipo;
             $this->email=$email;
             $this->dia=$dia;
             $this->semana=$semana;
             $this->contador=$contador;
             $this->tiempo=$tiempo;
    	}
      public function veinte($conexion){//funcion donde se califican las puebas que contienen 20 respuestas de matemáticas. 
        // se calcula la calificacion 
        $puntos=0;
        if($this->rango != 0){ 
          if( $this->rango < 11){
             $puntos=1.5;            
          }else{ 
            if($this->rango > 10 && $this->rango < 20){
              $puntos=2.25;               
            }else{
                $puntos=3;
            }
          }            
        }                       
        $this->agregar($conexion, $puntos);
      }
      public function catorce($conexion){//funcion donde se califican las puebas que contienen 14 respuestas. 
        // se calcula la calificacion 
        $puntos=0;
        if($this->rango != 0){ 
          if( $this->rango < 8){
             $puntos=0.5;            
          }else{ 
            if($this->rango > 7 && $this->rango < 14){
              $puntos=0.75;               
            }else{
                $puntos=1;
            }
          }            
        }                       
        $this->agregar($conexion, $puntos);
      }
      public function doce($conexion){//funcion donde se califican las puebas que contienen 12 respuestas. 
        // se calcula la calificacion 
        $puntos=0;
        if($this->rango != 0){ 
          if( $this->rango < 7){
             $puntos=0.5;            
          }else{ 
            if($this->rango > 6 && $this->rango < 12){
              $puntos=0.75;               
            }else{
                $puntos=1;
            }
          }            
        }                       
        $this->agregar($conexion, $puntos);
      }
      public function diez($conexion){//funcion donde se califican las puebas que contienen 10 respuestas. 
        // se calcula la calificacion 
        $puntos=0;
        if($this->rango != 0){ 
          if( $this->rango < 6){
             $puntos=0.5;            
          }else{ 
            if($this->rango > 5 && $this->rango < 10){
              $puntos=0.75;               
            }else{
                $puntos=1;
            }
          }            
        }                       
        $this->agregar($conexion, $puntos);
      }
      public function diezMate($conexion){//funcion donde se califican las puebas que contienen 10 respuestas del área de matemáticas. 
        // se calcula la calificacion 
        $puntos=0;
        if($this->rango != 0){ 
          if( $this->rango < 6){
             $puntos=1.5;            
          }else{ 
            if($this->rango > 5 && $this->rango < 10){
              $puntos=2.25;               
            }else{
                $puntos=3;
            }
          }            
        }                       
        $this->agregar($conexion, $puntos);
      }
      public function nueve($conexion){//funcion donde se califican las puebas que contienen 9 respuestas. 
        // se calcula la calificacion 
        $puntos=0;
        if($this->rango != 0){ 
          if( $this->rango < 5){
             $puntos=0.5;            
          }else{ 
            if($this->rango > 4 && $this->rango < 9){
              $puntos=0.75;               
            }else{
                $puntos=1;
            }
          }            
        }                       
        $this->agregar($conexion, $puntos);
      }
      public function ocho($conexion){//funcion donde se califican las puebas que contienen 8 respuestas. 
        // se calcula la calificacion 
        $puntos=0;
        if($this->rango != 0){ 
          if( $this->rango < 5){
             $puntos=0.5;            
          }else{ 
            if($this->rango > 4 && $this->rango < 8){
              $puntos=0.75;               
            }else{
                $puntos=1;
            }
          }            
        }                       
        $this->agregar($conexion, $puntos);
      }

    	public function seis($conexion){//funcion donde se califican las puebas que contienen 6 respuestas. 
    		// se calcula la calificacion 
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
        $this->agregar($conexion, $puntos);
    	}
      public function seisMate($conexion){//funcion donde se califican las puebas que contienen 6 respuestas de matematicas. 
        // se calcula la calificacion 
        $puntos=0;
        if($this->rango != 0){ 
          if( $this->rango < 4){
             $puntos=1.5;            
          }else{ 
            if($this->rango > 3 && $this->rango < 6){
              $puntos=2.25;               
            }else{
                $puntos=3;
            }
          }            
        }                       
        $this->agregar($conexion, $puntos);
      }
 
      public function cinco($conexion){//funcion donde se califican las puebas que contienen 5 respuestas. 
        // se calcula la calificacion 
        $puntos=0;
        if($this->rango != 0){ 
          if( $this->rango < 3){
             $puntos=0.5;            
          }else{ 
            if($this->rango > 2 && $this->rango < 5){
              $puntos=0.75;               
            }else{
                $puntos=1;
            }
          }            
        }                       
        $this->agregar($conexion, $puntos);
      }

        public function cuatro($conexion){//funcion donde se califican las puebas que contienen 4 respuestas. 
            // se calcula la calificacion 
            $puntos=0;
            if($this->rango != 0){ 
              if( $this->rango < 3){
                 $puntos=0.5;            
              }else{ 
                if($this->rango == 3 ){
                  $puntos=0.75;               
                }else{
                    $puntos=1;
                }
              }            
            }                       
            $this->agregar($conexion, $puntos);
        }
        public function cuatroMate($conexion){//funcion donde se califican las puebas que contienen 4 respuestas del área de matematicas. 
            // se calcula la calificacion 
            $puntos=0;
            if($this->rango != 0){ 
              if( $this->rango < 3){
                 $puntos=1.5;            
              }else{ 
                if($this->rango == 3 ){
                  $puntos=2.25;               
                }else{
                    $puntos=3;
                }
              }            
            }                       
            $this->agregar($conexion, $puntos);
        }
        public function tres($conexion){//funcion donde se califican las puebas que contienen 3 respuestas. 
            // se calcula la calificacion 
            $puntos=0;
            if($this->rango != 0){ 
              if( $this->rango == 1){
                 $puntos=0.5;            
              }else{ 
                if($this->rango == 2 ){
                  $puntos=0.75;               
                }else{
                    $puntos=1;
                }
              }            
            }                       
            $this->agregar($conexion, $puntos);
        }
        public function uno($conexion){//funcion donde se califican las puebas que contienen 3 respuestas. 
            // se calcula la calificacion 
            $puntos=0;
            if($this->rango != 0){ 
                $puntos=1;            
            }
            agregar($conexion, $puntos);                                   
        }
        public function agregar($conexion, $puntos){
           $resultado=new Resultado();
            $resultado->addResultado($conexion, $this->email, $this->tipo, $puntos, $this->dia, $this->semana, $this->tiempo);            
            $this->contador=$this->contador+1;            
            if($this->contador>2){
               $this->contador=0;
               $this->dia=$this->dia+1;
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