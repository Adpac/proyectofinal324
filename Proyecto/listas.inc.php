<!--POR PAOLA ALARCON TIÑINI -- -->
<?php
session_start();
$nombre=$_SESSION["usuario"];
$nivel=$_SESSION["nivel"];
$ci=$_SESSION["ci"];

require("funciones/motor.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--VER MAS ADELANTE SI EL SCRIPT ES NECESARIO-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--HASTA AQUI-->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<title>LISTAS</title>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/responsiveslides.min.js"></script>

<script type="text/javascript" src="js/hover_pack.js"></script>

</head>
<body>
<?php
  //if($_SESSION['nivel']==1){
echo "
        <div class='container'>
        <div class='col-lg-8'><font color='Darkblue' size='3' face='Monotype Corsiva'><b>BIENVENID@:</b></font>
        <font face='Monotype Corsiva' size='5' color='Darkblue'><b>$nombre</b></font><br>
        </div></div>";
?>

<?php
//}
?>
<br>
<div class="container">
<div class="row alto align-items-center justify-content-center">
	<table  width="70%" height="100px" border="0" align="center" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
	<th colspan="1">CI</th>
	<th>Nombre</th>
	<th>Apellido Paterno</th>
	<th>Apellido Materno</th>
	<th># Matricula</th>
	<th>Estado</th>
	<th>Matricula Pagada</th>
	</tr>
	</thead>
	
	<center><div class="form-group"><label>LISTA</label></div></center>
	<div class="col-md-8">
	<?php
	$re="  SELECT *
		   FROM listaestudiantes";
	$res=mysqli_query($conexion,$re);
	
	  while($fila=mysqli_fetch_array($res))
	{
	  echo'<tbody>';
	  echo' 
	
	  	<tr>
		<form method="GET">
		<tr>
		<td><input type="text" name="ci" id="ci" value="'.$fila['CI'].'" readonly="" size="10"></td>
		<td><input type="text" name="nom" id="nom" value="'.$fila['Nombre'].'" readonly="" size="10"></td>
		<td><input type="text" name="pat" id="pat" value="'.$fila['paterno'].'" readonly="" size="10"></td>	
		<td><input type="text" name="mat" id="mat" value="'.$fila['materno'].'" readonly="" size="10"></td>
		<td><input type="text" name="nom" id="nummatri" value="'.$fila['num_matricula'].'" readonly="" size="10"></td>
		<td><input type="text" name="nom" id="est" value="'.$fila['estado'].'" readonly="" size="10"></td>
		<td><input type="text" name="nom" id="matripag" value="'.$fila['matricula_pagada'].'" readonly="" size="10"></td>
		
		
		</form>
		</tr>
	    </tbody>';
	}
	?>
	</div>
	</table>
</div>
</div>

<br>
<br>

</body>
</html>