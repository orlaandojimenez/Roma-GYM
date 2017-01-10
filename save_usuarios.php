<?php
require_once 'lib.php';

$usuario=$_POST['usuario'];
$pwd=md5($_POST['pwd']);
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];


/*echo "<p> Usuairo: ".$usuario."</p>";
echo "<p> Password: ".$pwd."</p>";
echo "<p> Nombre: ".$nombre."</p>";
echo "<p> Apellido: ".$apellido."</p>";
echo "<p> Email: ".$email."</p>";*/

guardarUsuario($usuario, $pwd, $nombre, $apellido, $email);

require_once 'rep_usuarios.php';
?>