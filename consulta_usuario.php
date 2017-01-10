<?php
require_once 'lib.php';

$id=$_POST["id"];

$datos=consultaUsuario($id);
echo $datos;
?>