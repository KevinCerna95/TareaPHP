<?php
	session_start();
	if(!isset($_SESSION["us"])){
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css"
	 href="mod1.css">
	<title>...:::Bienvenido Vendedor:::...</title>
	<meta charset="utf-8">

</head>
<body>
		<div id="header">
			<ul class="nav" align="center">
				<li><a href="ClientesVendedor.php">Gestionar Clientes.</a>
				</li>
				<li><a href="VehiculosVendedor.php">Ver Vehiculos.</a>
				</li>
				<li><a href="VentasVendedor.php">Gestionar Ventas.</a></li>
				<li><a href ='Acceso.php?cerrar=true'>Cerrar Sesion</a></li>
			</ul>
		</div>
		
		<div id="titulo" align="center">
			<font color="white" face="algerian">
			<?php print "Bienvenido Vendedor ".  $_SESSION["us"]["nombre"]."."?>
			</font>
		</div>
</body>
</html>