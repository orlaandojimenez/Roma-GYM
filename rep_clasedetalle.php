<?php
require_once 'lib.php';
$datos= consultarClaseDetalle();


echo "<h2> REPORTE CLASE DETALLE </h2>";

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> Id Clase </td>";
echo "<td> Id Cliente </td>";
echo "<td> Accion </td>";
echo "</tr>";


foreach ($datos as $key => $det) {
	
	echo "<tr>";
echo "<td>".$det->id."</td>";
echo "<td>".$det->id_clase."</td>";
echo "<td>".$det->id_cliente."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$det->id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$det->id});'/>
</td>";
echo "</tr>";
}
echo "</table>";
?>