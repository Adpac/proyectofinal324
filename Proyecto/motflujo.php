	<?php
	include "conexion.php";
	$flujo=$_GET["flujo"];
	$proceso=$_GET["proceso"];
	$formulario=$_GET["formulario"];

	
	//if (isset())
	if (isset($_GET["Siguiente"]))
	{

		
		$fila=buscarflujoproceso($flujo,$proceso);
		$procesosiguiente=$fila->procesosiguiente;
		//echo $fila["tipo"];
		echo $procesosiguiente;
		if ($procesosiguiente=="" && $fila->tipo=='C')
		{
			echo "llegue aqui";
			echo $_GET["NO"];
			if(isset($_GET["NO"])){
				echo "1231231";
				$pregunta="NO";
			}else{
				$pregunta="SI";
			}
			echo($flujo);
			$fila2=buscarflujocondicionante($flujo, $proceso);
			if ($pregunta=='SI')
				$procesosiguiente=$fila2->si;
			else 
				$procesosiguiente=$fila2->no;
		}
		echo "<br>";
		print_r($fila2);
		echo $proceso;
		echo $procesosiguiente;
	

		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$procesosiguiente);


		

	}
	else
	{
	
		$fila=buscarporprocesosig($flujo,$proceso);
		$proceso=$fila->proceso;
		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$proceso);
	}
	include $formulario.".mot.inc.php";
	
	?>
