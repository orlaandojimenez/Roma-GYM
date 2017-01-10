<?php
require_once 'lib.php';
include 'config.php';

$q=$_POST['q'];
global $conn;

$sql="select * from clase where nombre LIKE '".$q."%' or id LIKE '".$q."%'";
$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)==0){

echo '<b>No hay sugerencias</b>';

}else{

echo '<b>Sugerencias:</b><br />';

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> Nombre </td>";
echo "<td> Descripcion </td>";
echo "<td> Fecha </td>";
echo "<td> Empleado </td>";
echo "<td> Accion </td>";
echo "</tr>";



while($fila=mysqli_fetch_array($res)){
	
$id=$fila['id'];	
$nombre=$fila['nombre'];
$descripcion=$fila['descripcion'];
$id_empleado=$fila['id_empleado'];
$fecha=date('d / m / Y', $fila['fecha']);

	
echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$nombre."</td>";
echo "<td>".$descripcion."</td>";
echo "<td>".$fecha."</td>";
echo "<td>".$id_empleado."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$id});'/>
</td>";
echo "</tr>";



}
}


?>