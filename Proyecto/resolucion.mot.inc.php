<?php 
if(isset($_GET['grabar'])){
	require("funciones/motor.php");

    $res=$_GET['resolucion'];
    echo $res;
    $sql="INSERT INTO resoluciones (descripcion) values ('".$res."');";
            $resp=mysqli_query($conexion,$sql);
            if($resp){
            echo"
            <script>
            window.alert('Registro de resolucion EXITOSO');
            window.location='resolucion.php';
            </script>
            ";}else{
                echo"
            <script>
            window.alert('Registro  NO PASO');
            window.location='resolucion.php';
            </script>
            ";
            }
}


 ?>