<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>...:::Bienvenido Vendedor:::...</title>
	<meta charset="utf-8">
	<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {

				margin:auto;
				width:100%;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
				width: 25%;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
				height: 20%;
			}
			#titulo
			{
				width: 100%;
				height: 20%;
				background-color: gray;
				font-size: 20px;
				display:block;

			}
			body
			{
				background-image: url("login.jpg");
				background-repeat: no-repeat;
				background-size: auto;
			}
	
			
		</style>

</head>
<body>
		<div id="header">
			<ul class="nav">
				<li><a href="ClientesVendedor.php">Gestionar Clientes.</a>
				</li>
				<li><a href="VehiculosVendedor.php">Gestionar Vehiculos.</a>
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