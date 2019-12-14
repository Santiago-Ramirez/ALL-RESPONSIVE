<?php


class database
{

  private $PDOLocal;
  private $user = "root";
  private $password = "";
  private $server = "mysql:host=localhost; dbname=gayosso_gayosbd;";

function conectarDB()
{
  $this->PDOLocal = new PDO($this->server, $this->user, $this->password);
}

function desconectarBD()
{
  $this->PDOLocal = null;
}


function ejecutaSQL($query)
{
  $this->PDOLocal->query($query);
}


function seleccionar($query)
{
  $resultado = $this->PDOLocal->query($query);
  $renglon = $resultado->rowCount();

  if($renglon > 0 )
  {
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC))
    {
      $datos[] = $row;
    }
  }
  else
  {
    $datos = null;
  }
  return $datos;
}

function verificalogin($usuario, $contra)
{
  $pase=0;
	$query="select * from USUARIOS where user='$usuario'";
	$consulta = $this->PDOLocal->query($query);
	while($registro=$consulta->fetch(PDO::FETCH_ASSOC))
	{
		if(password_verify($contra, $registro['password']))
		{
			$pase++;
		}
	}
		if($pase>0)
		{
			session_start();
      $_SESSION["usuario"]=$usuario;
			echo "<br><br><div class='alert alert-success'>";
			echo "<h2 align='center'>Bienvenid@ " .$_SESSION["usuario"]."</h2>";
			echo "</div>";
			header("refresh:3; GAYOSSO_MAIN.php");
		}
    else
    {
      echo "<div class='alert alert-danger'>";
      echo "<h2 align='center'>Usuario o contraseña INCORRECTOS</h2>";
      echo "</div>";
      header("refresh:3; index.php");
    }

	}

  function cerrarSesion()
  {
  session_start();
  session_destroy();
  echo "<br><div class='alert alert-success' align='center'><h2>Gracias por visitar Gayosso</div></h2>";
	header("refresh:3; index.php");
  }
}
 ?>
