<?php 
	$nombre=$_POST['nombre'];
	$CI=$_POST['ci'];
	$Monto_de_pago=$_POST['Monto de pago'];

	$nombre="Adel Ramiro Paco Mamani";
	$CI="9200842 L.P.";
	$Monto_de_pago="27 Bs.";
	$cpt1=1111;
	$cpt2=1111;
	$cpt3=1111;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirmacion de pago</title>
</head>
<body>
	<h1>Pago exitoso</h1>
	<table>
		<thead>
			<caption>Datos personales</caption>
		</thead>
		<tbody>
			<tr>
				<td>Nombre</td>
				<td><?php echo "$nombre";?></td>
			</tr>
			<tr>
				<td>Carnet de identidad</td>
				<td><?php echo "$CI";?></td>
			</tr>
			<tr>
				<td>Monto a cancelado</td>
				<td><?php echo "$Monto_de_pago";?></td>
			</tr>
		</tbody>
	</table>
<p>Se enviara la notificacion correspondiente a la universidad</p>
</body>
</html>