<?php
	
	include "conexion.inc.php";
	$nombre=$_POST['nombre'];
	$CI=$_POST['ci'];
	$Monto_de_pago=$_POST['Monto de pago'];

	$nombre="Adel Ramiro Paco Mamani";
	$CI="9200842 L.P.";
	$generarcpt=True;
	while ($generarcpt) {
		$cpt1=mt_Rand(1000,9999); 
		$cpt2=mt_Rand(1000,9999); 
		$cpt3=mt_Rand(1000,9999); 
		$cpt=$cpt1.$cpt2.$cpt3;
		$sql="select * from pago where cpt='".$cpt."'";
		$resultado=mysqli_query($conn, $sql);
		$nrofilas=mysqli_num_rows($resultado);
		if ($nrofilas==0){
			//Evitamos que se repita el codigo cpt
			$generarcpt=False;
			
		}


	}


	$Monto_de_pago="27 Bs.";



	echo $cpt;
	if(isset($_SESSION['login'])){
		echo "session encontrada";
		$CI=$_SESSION['login'];
		
		$sql="select * from listaestudiantes where CI='".$CI."'";
		$resultado=mysqli_query($conn, $sql);
		$fila=mysqli_fetch_array($resultado);
		$nombre=$fila["Nombre"]." ".$fila["paterno"]." ".$fila["materno"];

			///Verificamos si el cpt ya se encuentra en la base de datos
		$sql="select * from pago where ci_estudiante='".$CI."'";
		$resultado=mysqli_query($conn, $sql);
		$nrofilas=mysqli_num_rows($resultado);
		if($nrofilas!=0){
			$fila=mysqli_fetch_array($resultado);
			$cpt=$fila["cpt"];
			$cptstring=(string)$cpt;
			echo $cpt;
			$cpt1=substr($cptstring,0,4);
			$cpt2=substr($cptstring,4,4);
			$cpt3=substr($cptstring,8,12);
		}else{
			echo "No se encontro cpt";
		}

		$_SESSION['cpt']=(string)$cpt;

	}else{
		echo "no hay session";
	}


	// Se debe crear un CPT que no repita con CPT anteriores
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Orden de pago CPT</title>

</head>
<body>
<h1>Banco union<h1>
	<h2>Solicitud de pago CPT</h2>

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
				<td>Monto a cancelar</td>
				<td><?php echo "$Monto_de_pago";?></td>
			</tr>
		</tbody>
	</table>

	<p>Codigo CPT creado</p>
	<h3>El codigo CPT creado es: <?php  echo($cpt1."-".$cpt2."-".$cpt3); ?></h3>
	<br>
	<p>Se enviara la documentacion correspondiente al solicitante</p>
	
	


</body>
</html>