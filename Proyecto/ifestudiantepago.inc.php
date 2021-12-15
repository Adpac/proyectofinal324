<?php 
//Conectamos a la base de datos 

//Verificamos si la orden de pago del banco ya fue cancelada

$pagoboleta=True;


	if($pagoboleta){
		header("Status: 301 Moved Permanently");
		header("Location: aceptarpago.php");
		exit;

	}else{
		header("Status: 301 Moved Permanently");
		header("Location: revsolpagoest.php");
		exit;

	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Verificacion de pago</title>
</head>
<body>

</body>
</html>