<?php
	session_start();
	if (!isset($_SESSION["admin"])) {
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" 
	href="mod.css">
	<title>..:::Gestion Vehiculos (Gerente):::..</title>
	<meta charset="utf-8">

</head>
<body>
	<div id="header">
		<ul class="nav" align="center">
				<li id="us"><a href=""><?php print "Usuario ".$_SESSION["admin"]["nombre"]." (Gerente)."?></a></li>
				<li><a href="InicioGerente.php">Regresar.</a>
				</li>
				<li><a href ="Acceso.php?cerrar=true">Cerrar Sesion</a></li>
			</ul>
	</div>
	<div id="t1" align="center">
		<table>
			<form method="POST" action="#">
				<tr>
					<td colspan="4" align="center"><font color="black" face="algerian">Datos del Vehiculo.</font></td>
				</tr>
				<tr>
					<td colspan="2">Id Vehiculo:</td>
					<td colspan="2">
					<input type="number" name="txtId" placeholder="Ingrese el Id del Vehiculo" min="1">
					</td>
				</tr>
				<tr>
					<td colspan="2">Marca del Vehiculo:</td>
					<td colspan="2">
					<input type="text" name="txtMarca" placeholder="Ingrese la marca del vehiculo" 
					pattern="[A-Za-z ]*" minlength="2">
					</td>
				</tr>
				<tr>
					<td colspan="2">Modelo del Vehiculo:</td>
					<td colspan="2">
					<input type="text" name="txtModelo" placeholder="Ingrese el modelo del vehiculo" minlength="2">
					</td>
				</tr>
				<tr>
					<td colspan="2">Color del Vehiculo:</td>
					<td colspan="2">
					<input type="text" name="txtColor" placeholder="Ingrese el color del vehiculo" minlength="2">
					</td>
				</tr>
				<tr>
					<td colspan="2">Año de producción:</td>
					<td colspan="2">
					<input type="number" name="txtYear" placeholder="Ingrese el año de produción" min="1900" >
					</td>
				</tr>
				<tr>
					<td colspan="2">Precio del Vehiculo:</td>
					<td colspan="2">
					<input type="text" name="txtPrecio" placeholder="Ingrese el precio del vehiculo" minlength="4"
					pattern="[0-9.]*">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="btIngresar" value="Agregar"></td>
					<td align="center"><input type="submit" name="btModificar" value="Modificar"></td>
					<td align="center"><input type="submit" name="btEliminar" value="Eliminar"></td>
				</tr>

			</form>
		</table>
	</div>
	<div id="t2" align="center">
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