<?php

 include 'conexion2.php';
 $USR=$_POST["user"];
 $PSWD=$_POST["password"];


 
$insertar="INSERT INTO USUARIOS(user, password) values
('$USR','$PSWD' )";

$res=mysqli_query($cnx, $insertar);
if (!$res) {
    echo "Error de conexion";
}
else
{
    header('Location: GAYOSSO_datos_empleado.html');

}

//if ($contra_user == $contra_bd) {
	# code...
//}

mysql_close($cnx);
?>

