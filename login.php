<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Acceder</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

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
    <link href="/TPFinal/recursos/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="/TPFinal/funciones/loguearUsuario.php" method="post">
      <img class="mb-4" src="/TPFinal/recursos/img/naruto.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>
      <label for="inputUsuario" class="sr-only">Usuario</label>
      <input type="text" id="inputUsuario" class="form-control" placeholder="Usuario" name="usuario" required autofocus>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; Garlopa Company 2020</p>
    </form>
  </body>
</html>
