<?php
@$sw = $_GET["sw"];
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
<link rel="stylesheet" href="css/menu_style.css" type="text/css" />
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body background="imagenes/ban9.png">
<center><br><br>

<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="panel panel-primary">
<div class="panel-body">
<!--<img src="imagenes/titulo1.png" width="430" height="200">-->
<!--<div><font color='green' size='6'><b>INGRESE SUS DATOS<b></font><br></div>-->
<?php
if($sw=="1") {echo"<b><font color='red' size='5' align='center'>Error de datos, intente de nuevo!</font></b><br>";}
?>
<form role="form" method="get" action="login.php" class="form-signin" >	
<div class="form-group">
<img src="images/usu2.jpg">
<label><b>Usuario:</b> <br><label>
<input class="form-control" name="username" id="username" placeholder="Usuario" type="text" size="25" maxlength="25" required />
</div>
<div class="form_group">
<img src="images/pass2.jpg">
<label><b>Password: </b><br><label>
<input class="form-control" name="pasw" id="pasw" placeholder="Contraseña" type="password" size="25" maxlength="25" required />
</div>
<div class="form_group">
<input class="btn btn-lg btn-primary" type="submit" name="ingresar" id="ingresar" value="Ingresar">
</div>
</form>
</div>
</div>
</div>
</div>

</center>
</body>
</html>