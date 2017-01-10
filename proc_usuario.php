<?php
require_once 'lib.php';
include 'config.php';

$q=$_POST['q'];
global $conn;

$sql="select * from usuario where nombre LIKE '".$q."%' or apellido LIKE '".$q."%' or id LIKE '".$q."%' or usuario LIKE '".$q."%'";
$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)==0){

echo '<b>No hay sugerencias</b>';

}else{

echo '<b>Sugerencias:</b><br />';

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> Usuario </td>";
echo "<td> Password </td>";
echo "<td> Nombre </td>";
echo "<td> Apellidos </td>";
echo "<td> Email </td>";
echo "<td> Accion </td>";
echo "</tr>";



while($fila=mysqli_fetch_array($res)){
	
$id=$fila['id'];	
$nombre=$fila['nombre'];
$apellido=$fila['apellido'];
$pwd=$fila['pwd'];
$usuario=$fila['usuario'];
$email=$fila['email'];

	
echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$usuario."</td>";
echo "<td>".$pwd."</td>";
echo "<td>".$nombre."</td>";
echo "<td>".$apellido."</td>";
echo "<td>".$email."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$id});'/>
</td>";
echo "</tr>";



}
}


?>