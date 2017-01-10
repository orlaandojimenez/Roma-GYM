<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet"href="bootstrap-3.3.4-dist/css/bootstrap.css" />
		<script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
		<script src="jquery-1.11.2.min.js"></script>
	</head>
	<style>
		.fondo{
			background-color: rgba(225, 0, 0, 0.9);
background: rgba(225, 0, 0, 0.9);
color: rgba(225, 0, 0, 0.9);
		}
		.imagen{
			background-image: url(img/logo.jpg);
			background-position: 50% 0%;
        background-repeat: no-repeat;
        background-size: contain;
        height: 500px;
        width: 800px;
       
       		}
       		.li{
       			color: white;
       		}
       		.red{
       			color:red;
       		}
	</style>
	<body>
		<div class="container">
			<div class="masthead">
				<nav class="nav nav-justified ">
				<a href="main.php"><img src="img/logo2.jpg" height="70" width="150" /></a><img src="img/adminpro.jpg" align="right" height="70" width="150"/>
				</br><ul class="nav nav-justified fondo">
					<li class="active "><a href="form_cliente.php" class="li">Clientes</a></li>
					<li><a href="form_clase.php" class="li">Clases</a></li>
					<li><a href="form_clasedetalle.php" class="li">Registro Clases</a></li>
					<li><a href="form_empleado.php" class="li">Empleados</a></li>
					<li><a href="form_usuario.php" class="li">Usuarios</a></li>
					<li><a href="form_asistencia.php" class="li">Asistencia</a></li>
					<li><a href="rutinas.php" class="li">Rutinas</a></li>
					<li><a href="dietas.php" class="li">Dietas</a></li>
		
					
				</ul>
				</nav>