<?php
require_once 'lib.php';
include 'config.php';

$q=$_POST['q'];
global $conn;

$sql="select * from asistencia where id_cliente LIKE '".$q."%'";
$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)==0){

echo '<b>No hay sugerencias</b>';

}else{

echo '<b>Sugerencias:</b><br />';

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> Id Cliente </td>";
echo "<td> Fecha </td>";
echo "<td> Accion </td>";
echo "</tr>";



while($fila=mysqli_fetch_array($res)){
	
$id=$fila['id'];	
$cliente=$fila['id_cliente'];
$fecha=date('d / m / Y', $fila['fecha']);

	
echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$cliente."</td>";
echo "<td>".$fecha."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$id});'/>
</td>";
echo "</tr>";



}
}


?>