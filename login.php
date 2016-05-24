<!DOCTYPE>
<html>
<head>
	<title>..::Logueo del Sistema::..</title>
	<meta charset="utf-8">
</head>
<body style="background-image:url(login.jpg)">
<form action="Acceso.php" method="POST" align="center">
		<table align="center" style="background-color:gray">
			<br>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="txtUser" required placeholder="Ingrese su nombre de usuario.."></td>
			</tr>
			<tr>
				<td>Contraseña:</td>
				<td><input type="password" name="txtContra" required placeholder="Ingrese su contraseña.."></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btEnviar" value="Ingresar."  style="background-color:lightblue"></td>
			</tr>
			<br>
		</table>
</form>
</body>
</html>
