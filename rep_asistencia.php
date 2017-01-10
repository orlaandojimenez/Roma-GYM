<?php
require_once 'lib.php';
$datos= consultarAsistencia();


echo "<h2> REPORTE ASISTENCIA </h2>";

echo "<table border= '1'>";  #delimitar las lineas de la tabla
echo "<tr>"; #cada renglon
echo "<td> id </td>"; 
echo "<td> ID Cliente </td>";
echo "<td> Fecha </td>";
echo "<td> Accion </td>";
echo "</tr>";

foreach ($datos as $key => $asistencia) {
	
	echo "<tr>";

echo "<td>".$asistencia->id."</td>";
echo "<td>".$asistencia->id_cliente."</td>";
echo "<td>".date("d / m / Y ", $asistencia->fecha)."</td>";
echo "<td>
		<img src=\"img/eliminar.jpg \" height= 30px; onclick='eliminar({$asistencia->id});'/>
		<img src=\"img/editar.png \" height= 30px; onclick='mostrar({$asistencia->id});'/>
</td>";
echo "</tr>";
}
echo "</table>";
?>