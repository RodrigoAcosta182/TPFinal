<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Carousel Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="/tpfinal/recursos/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/tpfinal/recursos/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <?php include "header.php"?>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="recursos/img/camion1.jpg" class="embed-responsive" width="100%" height="">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Garlopa Transfer</h1>
            <p>Entregando Garlopas a domicilio desde tiempos immemorables. No olvides Registrarte y ser parte de Garlopa Transfer</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
          <img src="recursos/img/camiones.jpg" class="embed-responsive" width="100%" height="auto">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
            <div class="carousel-caption text-left">
                <h1>SEGURIDAD</h1>
                <p>Entregando Garlopas a domicilio desde tiempos immemorables. No olvides Registrarte y ser parte de Garlopa Transfer</p>
            </div>
        </div>
      </div>
      <div class="carousel-item">
          <img src="recursos/img/carga.jpg" class="embed-responsive" width="100%" height="auto">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
          <div class="container">
              <div class="carousel-caption text-left">
                  <h1>CONFIANZA</h1>
                  <p>Entregando Garlopas a domicilio desde tiempos immemorables. No olvides Registrarte y ser parte de Garlopa Transfer</p>
              </div>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
      <!-- START THE FEATURETTES -->
        <div class="row featurette">
            <div class="container">
                <div class="row featurette">
                  <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Garlopa Company.</h2>
                    <p class="lead">"Usted es una mujer muy hermosa, y yo un joven inexperto. Sin embargo no veo la hora de embadurnarla en aceite, tirarla en la cama, y entubarle la garlopa hasta la garganta." Firma X.</p>
                  </div>
                  <div class="col-md-5 order-md-1">
                      <video width="500px" controls src="/tpfinal/recursos/video/JCVD.mp4" class=" featurette-heading bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"></video>
                      <!-- controls  autoplay loop playsinline -->
                      <!--<img src="/tpfinal/recursos/img/camion.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"alt="">-->
                  </div>
                </div>
            </div>
        <hr class="featurette-divider">
        </div><!-- /END THE FEATURETTES -->
  </div><!-- /.container -->

  <?php
  include_once "footer.php";
  ?>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/tpfinal/recursos/js/bootstrap.bundle.min.js"></script>
</html>
