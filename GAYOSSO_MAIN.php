
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gayyosso</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/miestilo.css">
  <link rel="stylesheet" href="miestilo.css">

</head>

<body >
  <?php
  session_start();
  if(isset($_SESSION["usuario"]))
  {


   ?>
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
                  <ul class="navbar-nav ml-auto acomodo">
                    <li class="nav-item">
                      <div class="dropdown">
                  <button class="btn btn-outline-gayosso dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menú Gayosso
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="index_cli.html">Buscar Cliente</a>
                  <a class="dropdown-item" href="cerrarsesion.php">Cerrar Sesión</a>
                  </div>
                  </div>
                      </li>
                    </ul>
              </nav>
              <div class="collapse navbar-collapse" id="navbar">
                  <ul class="navbar-nav">

                  </ul>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="btn btn-outline-secondary text-light nav-link" href="GAYOSSO_login.html">Buscar Cliente</a>
                        <a class="btn btn-outline-secondary text-light nav-link" href="GAYOSSO_login.html">Cerrar Sesión</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </header>



  <div class="containerSlider tam">
  <div class="slider" >
  <ul>
    <li> <img src="img/56749338_2618816118193596_1223094411160715264_o.jpg"> </li>
    <li> <img src="img/58574671_2659336637474877_545249602920513536_o.jpg"> </li>
     <li> <img src="img/60646297_2697223610352846_288415313148510208_o.jpg"> </li>
  </ul>
</div>
</div>




<div class="">
  <p class="acerca">Acerca de nosotros</p>
  <a href="GAYOSSO_USUARIO.html" class="btn de">Arma tu paquete</a>
  <p class="nosotros">Gayosso es la compañía líder en México y nos caracterizamos por una gama única. <br> Ofrecemos una solución integral, ya que no sólo contamos con servicios funerarios, <br> también tenemos propiedades de descanso final en cementerios y mausoleos propios.</p>
</div>


<center> <h1  class="sas">Acerca de nosotros</h1>
<p  class="sas">Gayosso es la compañía líder en México y nos caracterizamos por una gama única. <br> Ofrecemos una solución integral, ya que no sólo contamos con servicios funerarios, <br> también tenemos propiedades de descanso final en cementerios y mausoleos propios.</p>
<a href="GAYOSSO_USUARIO.html" class="btn ded sas">Arma tu paquete</a></center>
<br>



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
</html>


<?php } ?>



<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
