	<?php

	include "conexion.php";

	$flujo=$_GET["flujo"];
	$proceso=$_GET["proceso"];
	//$flujo="F1";
	//$proceso="P2";

	$usuario=$_POST['usuario'];

	session_start();
	$nombreusuario="11";
	$datossession=buscarusuario($nombreusuario);
	$_SESSION['login']=(string)$datossession->nombreusuario;
	$_SESSION['rol']=(string)$datossession->rol;

	$fila=buscarflujoproceso($flujo, $proceso);
	//print_r($fila);
	//include $fila->formulario.'.cab.inc.php';
	//echo ($fila->formulario);
	///echo "<br>";

	if(isset($_SESSION['login'])){
		//echo "Usuario: ".$_SESSION['login'];
		//echo "rol: ".$_SESSION['rol'];
	}else{
		//echo "sesion no encontrada";
	}
	
	?>
<html>
	<head>
		<title>Tabla BPM</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--VER MAS ADELANTE SI EL SCRIPT ES NECESARIO-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--HASTA AQUI-->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/responsiveslides.min.js"></script>

<script type="text/javascript" src="js/hover_pack.js"></script>
	</head>
<body>
	<div class="header">
	<div class="header_top">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""/></a>
			</div>
			<ul class="shopping_grid">
			      <a href="cerrar.php"><li><span class="m_1">Cerrar Sesion</span><img src="images/usu.jpg" alt=""/></li></a>
			      
			      <div class="clearfix"> </div>
			</ul>
		    <div class="clearfix"> </div>
		</div>
	</div>
		<div class="h_menu4"><!-- start h_menu4 -->
		<div class="container">

				 <script type="text/javascript" src="js/nav.js"></script>
	      </div><!-- end h_menu4 -->
     </div>
<div class="container">
	 <div class='col-lg-8'><font color='Darkblue' size='3' face='Monotype'>
	<div class="row alto align-items-center justify-content-center">

		<form action="motflujo.php" method="GET">
			
			<?php include ($fila->formulario.'.inc.php');?>
			<br>
			<input type="hidden" value="<?php echo $fila->formulario;?>" name="formulario"/>
			<input type="hidden" value="<?php echo $flujo?>" name="flujo"/>
			<input type="hidden" value="<?php echo $proceso?>" name="proceso"/>
			<input type="submit" value="Anterior" name="Anterior"/>
			<input type="submit" value="Siguiente" name="Siguiente"/>
		</form>
		</div>
	</div>
</div>


<br>
<br>
<div class="footer_bg">
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 f_grid1">
			<h3>Contactanos </h3>
			<a href="#"><img src="images/logo.png" alt=""/></a>
			<p>Tambien pueden encontrarnos en</p>
		</div>
		<div class="col-md-3 f_grid1 f_grid2">
			<h3>AQUI</h3>
			<ul class="social">
				<li><a href=""> <i class="fb"> </i><p class="m_3">Facebook</p><div class="clearfix"> </div></a></li>
			    <li><a href=""><i class="tw"> </i><p class="m_3">Twittter</p><div class="clearfix"> </div></a></li>
				<li><a href=""><i class="google"> </i><p class="m_3">Google</p><div class="clearfix"> </div></a></li>
				<li><a href=""><i class="instagram"> </i><p class="m_3">Instagram</p><div class="clearfix"> </div></a></li>
			</ul>

		</div>
		<div class="col-md-6 f_grid3">
			<h3>Contactos de Informacion</h3>
			<ul class="list">
				<li><p>Telefono : 1.800.254.5487</p></li>
				<li><p>Fax : 1.800.254.2548</p></li>
				<li><p>Email : <a href="donaAyudamascotas.com"> donaAyudamascotas.com</a></p></li>
			</ul>
			<ul class="list1">
				<li><p>Ellos tambien sientes</p></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="footer_bottom">
       	<div class="container">
       		<div class="cssmenu">
				<ul>
					<li class="active"><a href="login.html">Privacy Policy</a></li> .
					<li><a href="checkout.html">Terms of Service</a></li> .
					<li><a href="checkout.html">Creative Rights Policy</a></li> .
					<li><a href="login.html">Contact Us</a></li> .
					<li><a href="register.html">Support & FAQ</a></li>
				</ul>
			</div>
			<div class="copy">
			    <p>2021 UMSA <a href="" target="_blank">paginaPao</a></p>
		    </div>
		    <div class="clearfix"> </div>
       	</div>
</div>
</body>
</html>