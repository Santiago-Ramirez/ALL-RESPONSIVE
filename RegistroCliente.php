<?php
    
 include 'conexion2.php';

 $nombre_c=$_POST["NOMBRE"];
 $ap_c=$_POST["AP"];
 $am_c=$_POST["AM"];
 $dir_c=$_POST["DIRECCION"];
 $tel_c=$_POST["TELEFONO"];

 
$insertar_c="INSERT INTO CLIENTE (NOMBRE, AP, AM, DIRECCION, TELEFONO) values
('$nombre_c', '$ap_c', '$am_c', '$dir_c', '$tel_c')";

$res_c=mysqli_query($cnx, $insertar_c);
if (!$res_c) {
    echo "Error de conexión";
}
else
{
    header('Location: GAYOSSO_CARDS.html');
}



mysql_close($cnx);
?>