<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");

  class Graficar{

  	public function semana(){
  		$conexion=new Conexion();
  		$conexion=$conexion->conectar();
                    
  	  $email=$_GET['email'];
  		$semana=$conexion->real_escape_string(strip_tags($_POST['semana']));
  		$resultado=new Resultado($email);
      $datos=$resultado->getResultByWeek($conexion, $email, $semana);
      $info=$datos->fetch_array(MYSQLI_ASSOC);
      
      $arra1= array("dia"=>1);
      $arra2= array("dia"=>2);
      $arra3= array("dia"=>3);
      $arra4= array("dia"=>4);
      $arra5= array("dia"=>5);
      $arrygrande=array();

      foreach($info as $valor){
          switch($valor["dia"]){
              case 1: $arra1[$valor["prueba_tipo"]]=$valor["puntaje_usuario"]; break;
              case 2: $arra2[$valor["prueba_tipo"]]=$valor["puntaje_usuario"]; break;
              case 3: $arra3[$valor["prueba_tipo"]]=$valor["puntaje_usuario"]; break;
              case 4: $arra4[$valor["prueba_tipo"]]=$valor["puntaje_usuario"]; break;
              case 5: $arra5[$valor["prueba_tipo"]]=$valor["puntaje_usuario"]; break;
          }
      }
      if(count($arra1)==4){
            $arraygrande[0]=$arra1;
      }
      if(count($arra2)==4){
          $arraygrande[1]=$arra2;
      }
      if(count($arra3)==4){
          $arraygrande[2]=$arra3;
      }
      if(count($arra4)==4){
          $arraygrande[3]=$arra4;
      }
      if(count($arra5)==4){
          $arraygrande[4]=$arra5;
      } 

      echo json_encode($arraygrande);      
  	}
  }

    $metodo=$_GET['value'];
    $metodo=array('Graficar',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }

?>