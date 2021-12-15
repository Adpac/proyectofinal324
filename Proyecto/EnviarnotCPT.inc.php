<?php  

	session_start();
	if(isset($_SESSION['cpt'])&& isset($_SESSION['login'])){
		$todoenorden=True;
		include "conexion.inc.php";
		$cpt=$_SESSION['cpt'];
		$ci=$_SESSION['login'];
		echo $cpt;
		echo $ci;
		$sql="select * from pago where cpt='".$cpt."'";
		$resultado=mysqli_query($conn, $sql);
		$nrofilas=mysqli_num_rows($resultado);
		if($nrofilas==0){
			//Añadimos nueva orden de pago
			$sql="INSERT INTO pago (ci_estudiante, cpt, estado) values (".$ci.", ".$cpt.", 'pendiente');";
			$resultado=mysqli_query($conn, $sql);
		}
	}else{
		
		$todoenorden=False;
	}
	///Procederemos a enviar la informacion al estudiante con la BD
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Enviar notificacion php</title>
</head>
<body>
	<h3>
		<?php  
		if($todoenorden){
			echo "Se envio la solicitud de forma satisfactoria";
		}else{
			echo "Ocurrio un problema";
		}
		?>
	</h3>
</body>
</html>