<?php
session_start();
$usuario=$_SESSION['usuario'];

if(isset($_SESSION['usuario'])){
	$usuario=$_SESSION['usuario'];
}
else{
	header("Location: index.php");
}
//print_r($usuario);
?>
