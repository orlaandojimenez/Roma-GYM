<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet"href="bootstrap-3.3.4-dist/css/bootstrap.css" />
		<link rel="stylesheet"href="bootstrap-3.3.4-dist/css/justified.css" />
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
       		.letra{
       			color: white;
       		}
       		.li{
       			color:red;
       		}
       		.negro{
       			color:black;
       		}
		</style>
	<body>
		<div class="container">
			<div class="masthead">
				<nav class="nav nav-justified">
		
		<table align="center" class="table">
			<tr>
		<td align="center"><img src="img/logo1.jpg"  width="200" height="90" class="img-circle"/></td> <!--img   id="logo" -->
		<td align="center"><img src="img/adminpro.jpg" width="200" height="110"  width=180px; /></td>
	</tr>
	<tr >
		<td align="center"><img src="img/pesas.jpg"  class="img-circle" width=400px;/></td>
		
		<td align="center" class="jumbotron fondo"><h3 class="letra"></br>Iniciar Sesion</h3> 
			<form action="loginvalidate.php" method="post">
		<p class="letra">Usuario <input type="text" id="usuario" name="usuario" class="negro"/> </p>
		<p class="letra">Password <input type="password" id="pwd" name="pwd" class="negro"/></p>
		<input type="submit" class="btn-primary"/>
		</form>	
		</td>
	</tr>
	<tr >
		<td align="center"><h3 class="li">¡La forma más óptima de administrar tu gimnasio!</h3></td>
		
	</tr>
		</table>
		</nav>
		</div>
		</div>
	</body>
</html>