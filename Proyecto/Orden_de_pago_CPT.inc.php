<?php  
	include "conexion.inc.php";
	$sql="select * from pago";
	$resultado=mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h3>CPTs Generados</h3>
	<table>
		<thead>
			<td>Nombre</td>
			<td>CI</td>
			<td>CPT</td>
		</thead>
		<tbody>
			<?php
			while($fila = mysqli_fetch_array($resultado)) {
				$CI=$fila["ci_estudiante"];
				$cpt=$fila["cpt"];
   				$sqlnombre="select Nombre, paterno, materno from listaestudiantes where CI= '".$CI."'";
   				$resultadonombres=mysqli_query($conn, $sqlnombre);
   				$filanom=mysqli_fetch_array($resultadonombres);
   				$nombres=$filanom["Nombre"]." ".$filanom["paterno"]." ".$filanom["materno"];
   				echo("<tr>");
   				echo("<td>".$nombres."</td>");
   				echo("<td>".$CI."</td>");
   				echo("<td>".$cpt."</td>");
   				echo("</tr>");
			}
			?>
		</tbody>
	</table>

</body>
</html>