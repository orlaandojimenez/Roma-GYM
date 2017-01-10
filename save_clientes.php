<?php
require_once 'lib.php';
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$email=$_POST['email'];

/*echo "<p> Nombre: ".$nombre."</p>";
echo "<p> Apellido: ".$apellido."</p>";
echo "<p> Edad: ".$email."</p>";
echo "<p> Telefono: ".$telefono."</p>";
echo "<p> Direccion: ".$direccion."</p>";
echo "<p> Email: ".$email."</p>";*/
guardarCliente($nombre, $apellido, $edad, $telefono, $direccion, $email);
require_once 'rep_clientes.php';

?>