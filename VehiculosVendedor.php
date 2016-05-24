<?php
	session_start();
	if (!isset($_SESSION["us"])) {
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" 
	href="mod.css">
	<title>..:::Ver Vehiculos (Vendedor):::..</title>
	<meta charset="utf-8">

</head>
<body>
	<div id="header">
		<ul class="nav" align="center">
				<li id="us"><a href=""><?php print "Usuario ".$_SESSION["us"]["nombre"]." (Vendedor)."?></a></li>
				<li><a href="InicioVendedor.php">Regresar.</a>
				</li>
				<li><a href ="Acceso.php?cerrar=true">Cerrar Sesion</a></li>
			</ul>
	</div>
	<div id="t3" align="center">
		<table>
			<form method="POST" action="#">
				<tr>
					<td colspan="3">Buscador de Clientes.</td>
				</tr>
				<tr>
					<td>Buscar:</td>
					<td><input type="text" name="txtBuscar"></td>
					<td><select name="cmBuscar">
						<option value="idvehiculo">ID del Vehiculo.</option>
						<option value="marca">Marca del Vehiculo.</option>
						<option value="modelo">Modelo del Vehiculo.</option>
						<option value="color">Color del Vehiculo.</option>
						<option value="year">Año de Producción.</option>
						<option value="precio">Precio del Vehiculo.</option>
					</select></td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="btBuscar" value="Buscar."></td>
				</tr>
			</form>
		</table>
	</div>
</body>
</html>