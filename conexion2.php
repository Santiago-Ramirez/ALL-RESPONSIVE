<?php

$cnx = mysqli_connect("gayosso.uttics.com","gayosso_gayosus","DxOZPhF1","gayosso_gayosbd");

if (!$cnx) {
	echo "No se pudo conectar";
}

else {
	echo "Conexion exitosa";
}

	class database
	{
	
		function cerrarSesion()
		{
			session_start();
			session_destroy();
	
		}
	}
?>