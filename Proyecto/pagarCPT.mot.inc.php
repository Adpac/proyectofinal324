<?php 
$cpt=$_GET['cptescrito'];
echo "Esto es un cpt";
echo $cpt;
echo "<br>";
include "conexion.inc.php";
$sql="select * from pago where cpt='".$cpt."'";
		$resultado=mysqli_query($conn, $sql);
		$nrofilas=mysqli_num_rows($resultado);
		if($nrofilas==0){
			echo "error en pago";
			header("Location: desflujo.php?flujo=".$flujo."&proceso=P4");

		}else{
			$sql="UPDATE pago SET estado='pagado' where cpt='".$cpt."'";
			$resultado=mysqli_query($conn, $sql);
		}
?>

