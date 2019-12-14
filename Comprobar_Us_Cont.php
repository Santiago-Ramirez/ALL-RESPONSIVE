
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gayyosso</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/miestilo.css">
</head>

<body background="img/persons-731514_1280.jpg" style="background-size:cover">
  <header class="container-fluid">
      <div class="row">
          <div class="col header-nav mb-3">
              <nav class="navbar navbar-expand-md navbar-dark">
                  <a class="navbar-brand text-light" href="http://gayosso.uttics.com">
                      <img src="img/LOGOTRANSPARENTE.png" class="logotamañoptimize">
                  </a>
                  <h2 class="centerr text-white">BIENVENIDO</h2>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar">
                      <ul class="navbar-nav">

                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                              <a class="btn btn-outline-secondary text-light nav-link" href="GAYOSSO_registro.html">Registrarse</a>
                          </li>
                      </ul>
                  </div>
              </nav>
          </div>
      </div>
  </header>
  <br><br>
	<div class="container">
    <?php
    include 'php/conexiongayosso.php';
    $db=new database();
    $db->conectarDB();
    extract($_POST);
    $hola =$_POST['user'];
    //echo $hola;
    $hola2=$_POST['pw'];
    //echo $hola2;
    $db->verificalogin("$hola","$hola2");
    $db->desconectarBD();
    ?>
	</div>
  <footer class="container-fluid">
      <div class="row border-top py-1 justify-content-center">
          <div class="col-12 text-light text-center justify-content-center">
              <p class="footerUDSR">GAYOSSO® | TODOS LOS DERECHOS RESERVADOS | 2019</p>
              <p class="footerUDSR">EMPRESA: GAYOSSO</p>
              <p class="footerUDSR">CONTACTO: 8711785736</p>
              <p class="footerUDSR">CREADO POR &copy; UJMD </p>
              <a href="#" class="text-white">Ir a TOP</a>
          </div>
      </div>
  </footer>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
</html>
