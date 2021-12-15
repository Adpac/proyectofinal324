<?php

	$conn = mysqli_connect("localhost","usuario324","123456");
	mysqli_select_db($conn,"matriculacion");


	$sql="select * from listaestudiantes";
	$resultado=mysqli_query($conn, $sql);
	print_r($resultado);

	$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><Person></Person>");
	while($fila=mysqli_fetch_array($resultado)){

		$estudiante=$xml->addChild('usuario');
		echo "<xmp>";
		echo "<usuario>";
		echo "</xmp>";
		echo "<p></p>";
		echo "<xmp>";
		echo "	<nombreusuario>".$fila["CI"]."</nombreusuario>";
		echo "</xmp>";
		echo "<p></p>";
		echo "<xmp>";
		echo "	<contraseña>"."123456"."</contraseña>";
		echo "</xmp>";
		echo "<p></p>";
		echo "<xmp>";
		echo "	<rol>"."Estudiante"."</rol>";
		//$estudiante->addChild('nombreusuario',$fila["CI"]);
		//$estudiante->addChild('contraseña', '123456');
		//$estudiante->addChild('rol','Estudiante');
		echo "</xmp>";
		echo "<p></p>";
		echo "<xmp>";
		echo "</usuario>";
		echo "</xmp>";
		/*echo $fila["CI"];
		echo $fila["Nombre"];
		echo $fila["paterno"];
		echo $fila["materno"];
		echo "<br>";*/

	}
///Header('Content-type: text/xml');
//print($xml->asXML());


?>