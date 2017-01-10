<?php
require_once 'config.php';
session_start();
$pwd=md5($_POST['pwd']);
$usuario=$_POST['usuario'];
$query="SELECT * FROM usuario WHERE
		usuario='$usuario' and pwd='$pwd'";
		
global $conn;
$result=mysqli_query($conn, $query);
$usuario=mysqli_fetch_object($result);
if($usuario != null){
	echo "Acceso Correcto";
	$_SESSION['usuario']=$usuario;
header("Location:main.php");
}
else{
	echo "Acceso Denegado";
	
}
?>
