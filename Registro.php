<?php
    
 include 'conexion2.php';
 $NOMBRE=$_POST["NOMBRE"];
 $AP=$_POST["AP"];
 $AM=$_POST["AM"];


 
$insertar="INSERT INTO EMPLEADO(NOMBRE, AP, AM) values
('$NOMBRE', '$AP', '$AM')";

$res=mysqli_query($cnx, $insertar);
if (!$res) {
    echo "Error de conexión";
}
else
{
    header('Location: index.html');
}

//if ($contra_user == $contra_bd) {
	# code...
//}

//mysql_close($cnx);
?>