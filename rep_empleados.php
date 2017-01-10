
	
	<?php
require_once 'lib.php';
$datos= consultarEmpleado();


echo "<h2> REPORTE EMPLEADOS </h2>";

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> Nombre </td>";
echo "<td> Apellido </td>";
echo "<td> Puesto </td>";
echo "<td> Telefono </td>";
echo "<td> Direccion </td>";
echo "<td> RFC </td>";
echo "<td> Accion </td>";
echo "</tr>";

foreach ($datos as $key => $emp) {
	
	echo "<tr>";

echo "<td>".$emp->id."</td>";
echo "<td>".utf8_encode($emp->nombre)."</td>";
echo "<td>".utf8_encode($emp->apellido)."</td>";
echo "<td>".$emp->puesto."</td>";
echo "<td>".$emp->telefono."</td>";
echo "<td>".utf8_encode($emp->direccion)."</td>";
echo "<td>".$emp->rfc."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$emp->id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$emp->id});'/>
</td>";
echo "</tr>";
}
echo "</table>";
?>