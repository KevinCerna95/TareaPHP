<?php
	session_start();
	include 'credencial.php';
	if(isset($_REQUEST["btnIngresar"])){
		$usuario=$_REQUEST["txtUsuario"];
		$contra=$_REQUEST["txtContra"];
		$conexion = new mysqli(SERVIDOR,USUARIO,CONTRA,BASEDATOS);
		$sql="select nivel from usuarios where usuario='$usuario' and
		contra='$contra'";
		$resultado= $conexion->query($sql);
		$cuantos = mysqli_num_rows($resultado);
	if($cuantos==0){
		header("Location:loguin.php");
		}
		$fila = $resultado->fetch_array(MYSQLI_NUM);
		$nivel=$fila["0"];
			if($nivel=="admin"){
			$_SESSION["usuario"]["nombre"]=$usuario;
			$_SESSION["usuario"]["nivel"]=$nivel;
			header("Location:mantoPersona.php");
	}elseif($nivel=="user"){
		$_SESSION["usuario"]["nombre"]=$usuario;
		$_SESSION["usuario"]["nivel"]=$nivel;
		header("Location:vistaPersona.php");
	}else{
		header("Location:loguin.php");
	}
	}
	if(isset($_REQUEST["cerrar"])){
		session_destroy();
		header("Location:loguin.php");
	}
?>
