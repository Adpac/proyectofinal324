
<?php
	//$con=mysql_connect("localhost","root");
    //mysql_select_db("bddonacion3",$con);
require("funciones/motor.php");
    $res=$_POST['resolucion'];

    $sql="INSERT into resoluciones values('','$res')";
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
        
?>

    <!--//https://www.youtube.com/watch?v=fOqPD-tpPj0-->