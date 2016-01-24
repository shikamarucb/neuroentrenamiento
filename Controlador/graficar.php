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

      $hombres= array();
      $mujeres=array();

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
      $hombres[0]=$arra1M;
      $hombres[1]=$arra2M;
      $hombres[2]=$arra3M;
      $hombres[3]=$arra4M;
      $hombres[4]=$arra5M;

      $mujeres[0]=$arra1F;
      $mujeres[1]=$arra2F;
      $mujeres[2]=$arra3F;
      $mujeres[3]=$arra4F;
      $mujeres[4]=$arra5F;

      $arraygrande['masculino']=$hombres;
      $arraygrande['femenino']=$mujeres;
      
      echo json_encode($arraygrande);
    }
    public function edad(){
      $conexion=new Conexion();
      $conexion=$conexion->conectar();
                                
      $semana=$conexion->real_escape_string(strip_tags($_POST['semana']));
      
      $resultado=new Resultado();
      $datos=$resultado->getResultByAge($conexion, $semana);
      $info=$datos->fetch_all(MYSQLI_ASSOC);
      
      $arra1= array("dia"=>1);//array´s para alamacenar los datos por dia.
      $arra2= array("dia"=>2);
      $arra3= array("dia"=>3);
      $arra4= array("dia"=>4);
      $arra5= array("dia"=>5);

      $edad11= array(); //array's donde se van a almacenar los dias por cada edad.
      $edad12= array();
      $edad13= array();
      $edad14= array();
      $edad15= array();
      $edad16= array();
      $edad17= array();
      $edad18= array();
      $edad19= array();
      
      $arrygrande=array();

      foreach($info as $valor){
        switch($valor["edad"]){
            case 11: switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $edad11[0]=$arra1;
                      $edad11[1]=$arra2;
                      $edad11[2]=$arra3;
                      $edad11[3]=$arra4;
                      $edad11[4]=$arra5;                      
                     break;
            case 12: switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $edad12[0]=$arra1;
                      $edad12[1]=$arra2;
                      $edad12[2]=$arra3;
                      $edad12[3]=$arra4;
                      $edad12[4]=$arra5;                      
                     break;
            case 13: switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $edad13[0]=$arra1;
                      $edad13[1]=$arra2;
                      $edad13[2]=$arra3;
                      $edad13[3]=$arra4;
                      $edad13[4]=$arra5;                      
                     break;
            case 14: switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $edad14[0]=$arra1;
                      $edad14[1]=$arra2;
                      $edad14[2]=$arra3;
                      $edad14[3]=$arra4;
                      $edad14[4]=$arra5;                      
                     break;
            case 15: switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $edad15[0]=$arra1;
                      $edad15[1]=$arra2;
                      $edad15[2]=$arra3;
                      $edad15[3]=$arra4;
                      $edad15[4]=$arra5;                      
                     break;
            case 16: switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $edad16[0]=$arra1;
                      $edad16[1]=$arra2;
                      $edad16[2]=$arra3;
                      $edad16[3]=$arra4;
                      $edad16[4]=$arra5;                      
                     break;
              case 17: switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $edad17[0]=$arra1;
                      $edad17[1]=$arra2;
                      $edad17[2]=$arra3;
                      $edad17[3]=$arra4;
                      $edad17[4]=$arra5;                      
                     break;
              case 18: switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $edad18[0]=$arra1;
                      $edad18[1]=$arra2;
                      $edad18[2]=$arra3;
                      $edad18[3]=$arra4;
                      $edad18[4]=$arra5;                      
                     break;
              case 19: switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $edad19[0]=$arra1;
                      $edad19[1]=$arra2;
                      $edad19[2]=$arra3;
                      $edad19[3]=$arra4;
                      $edad19[4]=$arra5;                      
                     break;

        }
      }
      $arraygrande["Edad11"]=$edad11;//en este arraygrande se alamacena un array por edad el cual tiene la informacion por dia.
      $arraygrande["Edad12"]=$edad12;
      $arraygrande["Edad13"]=$edad13;
      $arraygrande["Edad14"]=$edad14;
      $arraygrande["Edad15"]=$edad15;
      $arraygrande["Edad16"]=$edad16;
      $arraygrande["Edad17"]=$edad17;
      $arraygrande["Edad18"]=$edad18;
      $arraygrande["Edad19"]=$edad19;        

      echo json_encode($arraygrande);
    }

    public function curso(){
      $conexion=new Conexion();
      $conexion=$conexion->conectar();
                                
      $semana=$conexion->real_escape_string(strip_tags($_POST['semana']));
      
      $resultado=new Resultado();
      $datos=$resultado->getResultByCourse($conexion, $semana);
      $info=$datos->fetch_all(MYSQLI_ASSOC);
      
      $arra1= array("dia"=>1);//array´s para alamacenar los datos por dia.
      $arra2= array("dia"=>2);
      $arra3= array("dia"=>3);
      $arra4= array("dia"=>4);
      $arra5= array("dia"=>5);

      $grado6= array(); //array's donde se van a almacenar los dias por cada curso.
      $grado7= array();
      $grado8= array();
      $grado9= array();
      $grado10= array();
      $grado11= array();      
      
      $arrygrande=array();

      foreach($info as $valor){
        switch($valor["grado"]){// dependiendo del curso se alamcena la informcaion por dias en cada array
            case 'sexto': switch($valor["dia"]){
                        case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                        case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                      }
                      $grado6[0]=$arra1;
                      $grado6[1]=$arra2;
                      $grado6[2]=$arra3;
                      $grado6[3]=$arra4;
                      $grado6[4]=$arra5;                      
                     break;
            case 'septimo': switch($valor["dia"]){
                              case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                            }
                            $grado7[0]=$arra1;
                            $grado7[1]=$arra2;
                            $grado7[2]=$arra3;
                            $grado7[3]=$arra4;
                            $grado7[4]=$arra5;                      
                           break;
            case 'octavo': switch($valor["dia"]){
                              case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                            }
                            $grado8[0]=$arra1;
                            $grado8[1]=$arra2;
                            $grado8[2]=$arra3;
                            $grado8[3]=$arra4;
                            $grado8[4]=$arra5;                      
                           break;
            case 'noveno': switch($valor["dia"]){
                              case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                            }
                            $grado9[0]=$arra1;
                            $grado9[1]=$arra2;
                            $grado9[2]=$arra3;
                            $grado9[3]=$arra4;
                            $grado9[4]=$arra5;                      
                           break;
            case 'decimo': switch($valor["dia"]){
                              case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                              case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                            }
                            $grado10[0]=$arra1;
                            $grado10[1]=$arra2;
                            $grado10[2]=$arra3;
                            $grado10[3]=$arra4;
                            $grado10[4]=$arra5;                      
                           break;
            case 'once': switch($valor["dia"]){
                            case 1:  $arra1[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                            case 2:  $arra2[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                            case 3:  $arra3[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                            case 4:  $arra4[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                            case 5:  $arra5[$valor["prueba_tipo"]]= $valor["avg(puntaje_usuario)"]; break;
                          }
                          $grado11[0]=$arra1;
                          $grado11[1]=$arra2;
                          $grado11[2]=$arra3;
                          $grado11[3]=$arra4;
                          $grado11[4]=$arra5;                      
                         break;             
        }
      }
      $arraygrande["grado6"]=$grado6;//en este arraygrande se alamacena un array por grado el cual tiene la informacion por dia.
      $arraygrande["grado7"]=$grado7;
      $arraygrande["grado8"]=$grado8;
      $arraygrande["grado9"]=$grado9;
      $arraygrande["grado10"]=$grado10;
      $arraygrande["grado11"]=$grado11;            

      echo json_encode($arraygrande);
    }
    
  }

    $metodo=$_GET['value'];
    $metodo=array('Graficar',$metodo);

    if(is_callable($metodo,true,$llamar)){
        call_user_func($llamar);
    }

?>