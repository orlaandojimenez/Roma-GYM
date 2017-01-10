<?php
require_once 'lib.php';
include 'config.php';

$q=$_POST['q'];
global $conn;

$sql="select * from cliente where nombre LIKE '".$q."%' or apellido LIKE '".$q."%' or id LIKE '".$q."%'";
$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)==0){

echo '<b>No hay sugerencias</b>';

}else{

echo '<b>Sugerencias:</b><br />';

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> Nombre </td>";
echo "<td> Apellidos </td>";
echo "<td> Edad </td>";
echo "<td> Telefono </td>";
echo "<td> Direccion </td>";
echo "<td> Email </td>";
echo "<td> FR </td>";
echo "<td> Accion </td>";
echo "</tr>";



while($fila=mysqli_fetch_array($res)){
	
$id=$fila['id'];	
$nombre=$fila['nombre'];
$apellido=$fila['apellido'];
$edad=$fila['edad'];
$telefono=$fila['telefono'];
$direccion=$fila['direccion'];
$email=$fila['email'];
$fecha=date('d / m / Y', $fila['fecha_registro']);

	
echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$nombre."</td>";
echo "<td>".$apellido."</td>";
echo "<td>".$edad."</td>";
echo "<td>".$telefono."</td>";
echo "<td>".$direccion."</td>";
echo "<td>".$email."</td>";
echo "<td>".$fecha."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$id});'/>
</td>";
echo "</tr>";



}
}


?>