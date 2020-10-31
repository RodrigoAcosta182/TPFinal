<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Login Garlopa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="/TPFinal/recursos/css/bootstrap.min.css" rel="stylesheet">

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
    <link rel="stylesheet" href="/tpfinal/recursos/css/floating-labels.css">
  </head>
  <body>
  <?php session_start();
        session_destroy();
  ?>


  <?php session_start()?>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" style="cursor: default" href="#">Garlopa Transfer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
          </ul>
          <?php
          if (isset($_SESSION["logueado"]) == 1){
              echo '<a href="/tpfinal/funciones/cerrarSesion.php?cerrarSesion=1"
                   class="btn btn-danger" >Cerrar Sesion</a>';
          }else{
              echo '<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                Registrarse
                </button>';
          }
          ?>
      </div>
  </nav>

  <?php include "modales/modalRegistrar.php" ?>
            <form class="form-signin" action="/TPFinal/funciones/loguearUsuario.php" method="post">
                <div class="text-center mb-4">
                    <img class="mb-4" src="/TPFinal/recursos/img/GT3.PNG" alt="" width="140" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>

                </div>

                <div class="form-label-group">
                    <input type="email" id="inputEmail" autocomplete="off" class="form-control" placeholder="Correo electronico" name="email"
                           required autofocus>
                    <label for="inputEmail">Correo electrónico</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" autocomplete="off" class="form-control" placeholder="Password" name="password" required>
                    <label for="inputPassword">Contraseña</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordarme
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>

                <p class="mt-5 mb-3 text-muted text-center">&copy; Garlopa Company 2020</p>
            </form>


</body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/tpfinal/recursos/js/bootstrap.bundle.min.js"></script>
</html>
</html>



