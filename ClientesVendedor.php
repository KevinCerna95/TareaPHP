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
	<title>..:::Gestion Clientes (Vendedor):::..</title>
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
	<div id="t1" align="center">
		<table >
			<form method="POST" action="#">
				<tr>
					<td colspan="3" align="center"><font color="black" face="algerian">Datos del Cliente.</font></td>
				</tr>
				<tr>
					<td>Id Cliente:</td>
					<td colspan="2">
					<input type="number" name="txtId" placeholder="Ingrese el Id del nuevo Cliente" min="1">
					</td>
				</tr>
				<tr>
					<td>Nombre Cliente:</td>
					<td colspan="2">
					<input type="text" name="txtNom" placeholder="Ingrese el nombre del cliente" minlength="5"
					pattern="[A-Za-z ]*">
					</td>
				</tr>
				<tr>
					<td>DUI Cliente:</td>
					<td colspan="2">
					<input type="text" name="txtDUI" placeholder="Ingrese el dui del cliente" pattern="\d{8}-\d{1}">
					</td>
				</tr>
				<tr>
					<td>NIT Cliente:</td>
					<td colspan="2">
					<input type="text" name="txtNit" placeholder="Ingrese el nit del cliente" 
					pattern="\d{4}-\d{6}-\d{3}-\d{1}">
					</td>
				</tr>
				<tr>
					<td>Dirección Cliente:</td>
					<td colspan="2">
					<input type="text" name="txtDir" placeholder="Ingrese la dirección del cliente" minlength="10">
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
		<table >
			<form method="POST" action="#">
				<tr>
					<td colspan="3">Buscador de Clientes.</td>
				</tr>
				<tr>
					<td>Buscar:</td>
					<td><input type="text" name="txtBuscar"></td>
					<td><select>
						<option value="idcliente">ID del Cliente.</option>
						<option value="nombre">Nombre del Cliente.</option>
						<option value="dui">DUI del Cliente.</option>
						<option value="nit">NIT del Cliente.</option>
						<option value="direccion">Dirección del Ciente.</option>
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