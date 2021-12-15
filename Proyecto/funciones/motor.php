<?php
$conexion=mysqli_connect("localhost","usuario324","123456");
	//mysqli_select_db($conn,"matriculacion");
if (!$conexion){

echo "<h2 align='center'>ERROR: Imposible establecer conección con el servidor de AMPER</h2>";

exit;

}
$base=mysqli_select_db($conexion,"matriculacion");
?>
