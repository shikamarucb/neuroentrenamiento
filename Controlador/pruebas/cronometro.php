<?php

 class Crono{

    private $tiempo_inicio=0;
    private $tiempo_fin=0;
    private $tiempo=0;

    public function inicio(){

   	  echo "inicio :". $this->tiempo_inicio = microtime(true);   	 
    }

    public function fin(){
   	  $this->tiempo_fin = microtime(true);
   	  $this->tiempo=$this->tiempo_fin - $this->tiempo_inicio;
   	  echo "Se calculo el tiempo: ".$this->tiempo."<br>";
      
   	  return true;
    }
 }
?>