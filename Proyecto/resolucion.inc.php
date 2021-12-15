<!--POR PAOLA ALARCON TIÑINI -- TEMA DONACIONES-->
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
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
				<li class="active"><a href="index.php" data-hover="Home">Inicio</a></li>
					<li><a href="historias.php" data-hover="About Us">Lanzar Resolucion</a></li>
				</ul>
				 <script type="text/javascript" src="js/nav.js"></script>
	      </div><!-- end h_menu4 -->
     </div>
</div>
<?php
//}
?>
<br>
<div class="container">
<div class="row alto align-items-center justify-content-center">
	<table  width="70%" height="100px" border="0" align="center" cellpadding="0" cellspacing="0">	
	<center><div class="form-group"><label>RESOLUCION</label></div></center>
	<div class="col-md-8">

	<tr>
		<td>      </td>
		<td><B>CONVOCATORIA MATRICULACION GESTION 2021</B></td>
		<td>NUM. DE RESOLUCION: HCF 345</td>
	</tr>
	<tr>
		<td>UNIVERSIDAD MAYOR DE SAN ANDRES<BR> VICERRECTORADO</td>
	</tr>
	<TR><td>----------------------</td></TR>
	<tr>
		<td colspan="3"><?php $pp="Mediante Resolución Nro. 481/2020, el Honorable Consejo Universitario aprueba el Proceso de Matriculación Universitaria de Pre-Grado, que, para la Gestión 2021, tendrá la característica de la actualización de datos personales de la población estudiantil en general.<br>
		CTUALIZACIÓN DE DATOS PARA ALUMNOS NUEVOS:
Ingresar a la página web: sia.umsa.bo/registroSIA

Registrar el Nro. de la Cédula de Identidad y confirmar este dato.
Subir foto 3 X 3 cm. con fondo celeste.
Llenar formulario con datos personales.
Escanear y subir documentos (Original de Certificado de Nacimiento, Fotocopia anverso y reverso de Cédula de Identidad, anverso y reverso de fotocopia legalizada de Diploma de Bachiller y Certificado de Habilitación).
Guardar e imprimir el formulario. Es obligatoria la impresión de este documento ya que en él se encuentra el CPT (Código de Pago de Trámites).
NO PODRÁN INGRESAR AL FORMULARIO, LOS ALUMNOS NUEVOS QUE ESTÉN OBSERVADOS. En estos casos apersonarse a la ventanilla 8 de la División de Gestiones, Admisiones y Registros."
	?>
	<input type="text" name="resolucion" class="textbox" value=""">
	<input name="grabar" type="submit" id="submit" value="Grabar">
	</td></tr>
	
	<!--<?php
	$re="  INSERT INTO resolucion VALUES('$pp')";
	$res=mysqli_query($conexion,$re);
	
	
	?>-->

	</div>
	</table>
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