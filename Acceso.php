<?php
  session_start();
  include "credenciales.php";
  if (isset($_POST["btEnviar"]))
  {
      $us = $_POST["txtUser"];
      $contra = $_POST["txtContra"];
      $conexion =new  mysqli(SERVIDOR,USUARIO,CONTRA,BASEDATOS);
      $sql = "Select nivel from usuarios where usuario='$us' and contra = '$contra'";
      $res = $conexion->query($sql);
      $cuantos = mysqli_num_rows($res);
      if($cuantos==0)
      {
        header("Location:login.php");
      }
      $fila=$res->fetch_array(MYSQLI_NUM);
      $nivel = $fila[0];
      if ($nivel == "Gerente")
      {
        $_SESSION["us"]["nombre"]=$us;
        $_SESSION["us"]["nivel"]=$nivel;
        header("Location:InicioGerente.php");
      }
      elseif ($nivel=="Vendedor")
      {
        $_SESSION["us"]["nombre"]=$us;
        $_SESSION["us"]["nivel"]= $nivel;
        header("Location:InicioVendedor.php");
      }
      else
      {
        header("Location:login.php");
      }
      if (isset($_REQUEST["cerrar"])) 
        {
          session_destroy();
          header("Location: login.php");  
        }
      }
?>
