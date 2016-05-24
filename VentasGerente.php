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
	<title>..:::Gestion Ventas (Gerente):::..</title>
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
					<td colspan="3" align="center"><font color="black" face="algerian">Datos de la Venta.</font></td>
				</tr>
				<tr>
					<td>Id Venta:</td>
					<td colspan="2">
					<input type="number" name="txtId" placeholder="Ingrese el Id  de la Venta" min="1">
					</td>
				</tr>
				<tr>
					<td>Fecha de la Venta:</td>
					<td colspan="2">
					<input type="text" name="txtFecha" placeholder="Ingrese la fecha de la venta"  
					pattern="\d{2}-\d{2}-\d{4}" title="Ej: 23-07-2016">
					</td>
				</tr>
				<tr>
					<td>Id Vehiculo:</td>
					<td colspan="2">
					<select name="cmBusVehiculo">
						
					</select>
					</td>
				</tr>
				<tr>
					<td>Id Cliente:</td>
					<td colspan="2">
					<select name="cmBusCliente">
						
					</select>
					</td>
				</tr>
				<tr>
					<td>Total de la venta:</td>
					<td colspan="2">
					<input type="text" name="txtTotal" placeholder="Ingrese el total de la venta" minlength="4">
					</td>
				</tr>
				<tr>
					<td align="center"><input type="submit" name="btIngresar" value="Agregar"></td>
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
						<option value="idventa">ID Venta.</option>
						<option value="fecha">Fecha de Venta.</option>
						<option value="idvehiculo">Id del Vehiculo.</option>
						<option value="idcliente">Id del Cliente.</option>
						<option value="total">Total de Venta.</option>
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