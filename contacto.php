<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title>Contacto - Hogar Geriátrico El Tata</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Styles CARRUSEL PEQUEÑO -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <!-- FIN CARRUSEL PEQUEÑO -->
    <link href="css/icons_services.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png" />
  </head>
  <body>
    <header>
    <div class="container">
    <nav class="navbar navbar-default">
      <div class="row">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">LOGO</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">INICIO</a></li>
            <li><a href="home.html">NUESTRO HOGAR</a></li>
            <li><a href="servicios.html">SERVICIOS</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICIOS<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li> -->
            <li><a href="contacto.html">CONTACTO</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
      </div>
    </nav>
  </div>
  </header>
  <section id="contacto"></section>
  <section id="vision">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form method="post" action="email.php">
                <div class="form-group">
                  <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" required="">
                </div>
                <div class="form-group">
                  <input type="email" name="correo" class="form-control" id="exampleFormControlInput2" placeholder="Email" required="">
                </div>
                <div class="form-group">
                  <input type="number" name="telefono" class="form-control" id="exampleFormControlInput3" placeholder="Teléfono" required="">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" placeholder="Mensajes" rows="3" required=""></textarea>
                </div>

                <button type="button" class="btn btn-primary">Enviar</button>
              </form>
        </div>
        <div class="col-md-6">
          <div class="textosfooter">
            <h1>Contáctenos</h1>
            <p>
              Dirección: Carrera 9A # 134 B - 07 Bogotá, Colombia<br>
              Teléfono: +(57) (1) 7588734 - 4817079<br>
              Celular: 3165798847<br>
              Email: correo.electronico@hotmail.com<br>
            </p>
            <hr>
            <h2>Síguenos</h2>
            <span class="fa fa-facebook-official" aria-hidden="true"></span>
            <span class="fa fa-instagram" aria-hidden="true"></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="footerblue">
    <div class="container">
      <div class="row">
        Dirección: Carrera 9A #134B-07 Bogotá, Colombia Teléfono: +(57) (1) 7588734 - 4817079<br>
        Celular: 3165798847 Email: correo.electronico@hotmail.com
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SCRIPTS CARRUSEL PEQUEÑO -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <!-- FIN CARRUSEL PEQUEÑO -->
    <script  src="js/index.js"></script>
  </body>
</html>