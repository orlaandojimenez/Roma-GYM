<?php
require_once 'lib.php';

$usuario=$_POST['usuario'];
$pwd=md5($_POST['pwd']);
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$id=$_POST["id"];
actualizarUsuario($id, $usuario, $pwd, $nombre, $apellido, $email);
require_once 'rep_usuarios.php';
?>