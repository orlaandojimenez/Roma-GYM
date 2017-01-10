<?php
require_once 'session_valid.php';
?>
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
       		.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 60%;
      margin: auto;
	</style>
	<body>
		<div class="container">
			<div class="masthead">
				<nav class="nav nav-justified ">
				<a href="main.php"><img src="img/logo2.jpg" height="70" width="150" /></a><img src="img/adminpro.jpg" align="right" height="80" width="150"/>
				<div align="center"><h3>Bienvenido <?php echo $usuario->nombre." ".$usuario->apellido." "?></h3></div><div align="right"><a href="salir.php"><strong>Cerrar Sesión</strong> </a></div>
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
			
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active" >
      <img src="img/logo.jpg"  alt="Habitacion">
      <div class="carousel-caption">
          <h3>¿ESTAS LISTO?</h3>
      </div>
    </div>
    <div class="item" >
      <img src="img/gym2.jpg"  alt="Hotel">
      <div class="carousel-caption">
          <h3>INICIA HOY EL CAMBIO CON TU SALUD Y TU FÍSICO, VETE FORJANDO METAS ALCANZABLES. EL DOLOR ES TEMPORAL, LA GLORIA ES ETERNA!</h3>
      </div>
    </div>
    <div class="item">
      <img src="img/gym1.jpg" alt="Restaurant">
      <div class="carousel-caption">
          <h3>No es difícil llegar a lo que queremos físicamente, lo difícil es mantenerse y eso se logra cuidando la alimentación y la dedicación al ejercicio</h3>
      </div>
    </div>
    <div class="item">
      <img src="img/gym3.jpg" alt="Entretenimiento">
      <div class="carousel-caption">
          <h3>Nunca te rindas</h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
			</div>
	</body>
	<script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
		<script src="jquery-1.11.2.min.js"></script>