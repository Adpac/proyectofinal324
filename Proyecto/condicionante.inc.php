<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Estudiante nuevo</title>
</head>
<body>
	<?php 
		session_start();
		include "conexion.inc.php";
		if(isset($_SESSION['ci'])){
			$ci=$_SESSION['ci'];
			$sql="select * from listaestudiantes where ci='".$ci."'";
			$resultado=mysqli_query($conn, $sql);
			$nrofilas=mysqli_num_rows($resultado);

			if($nrofilas!=0){
				$fila=mysqli_fetch_array($resultado);
				if($fila["estado"]=="Nuevo"){
					echo "Estudiante nuevo";
					?>
				    <input type="hidden" name='<?php echo("SI")?>' value="SI"'>
				    <?php
				}else{
					echo "Estudiante antiguo";
					?>
					<input type="hidden" name='<?php echo("NO")?>' value="NO"'>
					<?php
				}
			}else{
				echo("Usuario no registrado como estudiante");
			}
		}else{
			echo $_SESSION["usuario"];
			echo $_SESSION["rol"];
			echo $_SESSION['ci'];
			echo "Usted no es estudiante";
		}
	 ?>

</body>
</html>