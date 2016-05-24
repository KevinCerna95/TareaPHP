<?php
	session_start();
	if (!isset($_SESSION["admin"]))
	{
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mod1.css"> 
	<title>...:::Bienvenido Gerente:::...</title>
	<meta charset="utf-8">

</head>
<body>
		<div id="header">
			<ul class="nav" align="center">
				<li><a href="ClientesGerente.php">Gestionar Clientes.</a>
				</li>
				<li><a href="VehiculosGerente.php">Gestionar Vehiculos.</a>
				</li>
				<li><a href="VentasGerente.php">Gestionar Ventas.</a></li>
				<li><a href ="Acceso.php?cerrar=true">Cerrar Sesion.</a></li>
			</ul>
		</div>
		
		<div id="titulo" align="center">
			<font color="white" face="algerian">
			<?php print "Bienvenido Gerente ".  $_SESSION["admin"]["nombre"]."."?>
			</font>
		</div>
</body>
</html>