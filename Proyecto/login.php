<?php
session_start();
$user = $_GET['username'];
$pasw = $_GET['pasw'];
//$pasw = md5($pasw);

include "conexion.php";



$usuario=buscarusuarioycontraseña($user, $pasw);
print_r($usuario);
if($usuario!=null)
{ 

///aca asigno a variables de sesion ciertos datos: 
$_SESSION["ci"] = (string)$usuario->ci;
$_SESSION["usuario"] =(string)$usuario->nombreusuario;
$_SESSION["nivel"] = (string)$usuario->rol;
// se redirecciona a historia.php
	if($usuario->rol=="facultad")
	{header("Location: desflujo.php?flujo=F1&proceso=P1");
	}else{
     header("Location: desflujo.php?flujo=F1&proceso=P3");
	}
}
else{
	// en caso de error retorna a ingreso.php y envia una bandera pra indicar q el logeo fue incorrecto
	header("Location: iniciosesion.php?sw=1");
	}

?>