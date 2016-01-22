<?php
    include_once ("../Modelo/usuario.php");
    include_once ("../Modelo/control.php");
    include_once ("../Modelo/conexion.php");
    include_once ("../Modelo/resultado.php");

  class Graficar{

  	public function semana(){
  		$conexion=new Conexion();
  		$conexion=$conexion->conectar();
                    
  	  $email=$_GET['email'];
  		$semana=$conexion->real_escape_string(strip_tags($_POST['semana']));

  		$resultado=new Resultado();
      $datos=$resultado->getResultByWeek($conexion, $email, $semana);
      $info=$datos->fetch_all(MYSQLI_ASSOC);
      
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
    
    public function sexo(){
      $conexion=new Conexion();
      $conexion=$conexion->conectar();
                          
      //$sexo=$conexion->real_escape_string(strip_tags($_POST['sexo']));
      $semana=$conexion->real_escape_string(strip_tags($_POST['semana']));
      
      $resultado=new Resultado();
      $datos=$resultado->getResultBySex($conexion, $semana);
      $info=$datos->fetch_all(MYSQLI_ASSOC);
      
      $arra1M= array("dia"=>1);//array´s para alamacenar los datos de Masculino
      $arra2M= array("dia"=>2);
      $arra3M= array("dia"=>3);
      $arra4M= array("dia"=>4);
      $arra5M= array("dia"=>5);

      $arra1F= array("dia"=>1);//Array´s para almacenar los datos de femenino
      $arra2F= array("dia"=>2);
      $arra3F= array("dia"=>3);
      $arra4F= array("dia"=>4);
      $arra5F= array("dia"=>5);

      $arrygrande=array();

      foreach($info as $valor){
        if($valor["genero"] == 'M'){
          switch($valor["dia"]){
              case 1: $arra1M[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
              case 2: $arra2M[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
              case 3: $arra3M[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
              case 4: $arra4M[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
              case 5: $arra5M[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
          }
        }else{
          switch($valor["dia"]){
              case 1: $arra1F[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
              case 2: $arra2F[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
              case 3: $arra3F[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
              case 4: $arra4F[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
              case 5: $arra5F[$valor["prueba_tipo"]]=$valor["avg(puntaje_usuario)"]; break;
          }
        }
      }
      
      if(count($arra1M)==4){           //LOS PRIMEROS 5 CAMPOS DEL arraygrande son para masculinos los siguientes 5 son para femenino
            $arraygrande[0]=$arra1M;
      }
      if(count($arra2M)==4){
          $arraygrande[1]=$arra2M;
      }
      if(count($arra3M)==4){
          $arraygrande[2]=$arra3M;
      }
      if(count($arra4M)==4){
          $arraygrande[3]=$arra4M;
      }
      if(count($arra5M)==4){
          $arraygrande[4]=$arra5M;
      } 

      if(count($arra1F)==4){           //LOS PRIMEROS 5 CAMPOS DEL arraygrande son para masculinos los siguientes 5 son para femenino
            $arraygrande[5]=$arra1F;
      }
      if(count($arra2F)==4){
          $arraygrande[6]=$arra2F;
      }
      if(count($arra3F)==4){
          $arraygrande[7]=$arra3F;
      }
      if(count($arra4F)==4){
          $arraygrande[8]=$arra4F;
      }
      if(count($arra5F)==4){
          $arraygrande[9]=$arra5F;
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