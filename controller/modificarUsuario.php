<?php
include_once("../Permisos.php");
$permiso = new Permisos();
$usuario = $permiso->getUsuarios();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Permisos Garlopa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

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
    <link href="/tpfinal/recursos/css/jumbotron.css" rel="stylesheet">
</head>
<body>
<?php include "../header.php"?>
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Permisos</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        </div>
    </div>

    <div class="container">
        <div class="table-responsive">
                <tbody>
                <?php
                foreach ($usuario as $datos){}
                    ?>

                    <form action="/TPFinal/funciones/abmUsuarioModificar.php" method="post"
                        <label for=""></label>
                        <input type="text"hidden id="idpersona" name="idpersona" class="form-control input-sm" >
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="nombre" autocomplete="off" class="form-control input-sm" value="<?php echo $datos["Nombre"] ?>">
                        <label for="">Apellido</label>
                        <input type="text" name="apellido" id="apellido" autocomplete="off" class="form-control input-sm"value="<?php echo $datos["Apellido"] ?>">
                        <label for="">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" class="form-control input-sm"value="<?php echo $datos["Email"] ?>">
                        <label for="">Password</label>
                        <input type="password" name="" id="password" autocomplete="off" class="form-control input-sm" value="<?php echo $datos["Password"] ?>">
                        <label for="">Rol</label>
                        <select name="" id="" class="form-control input-sm">
                            <option selected><?php echo $datos["Descripcion"]?></option>
                            <option value="">Administrador</option>
                            <option value="">Chofer</option>
                            <option value="">Supervisor</option>
                            <option value="">Encargado</option>
                        </select>
                        <label for="">Activo</label>
                        <select name="active" id="active" class="form-control input-sm">
                            <option value="0">Desactivado</option>
                            <option value="1">Activado</option>
                        </select>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning" id="actualizadatos">Modificar</button>
                        </div>
                    </form>


                </tbody>
        </div>
    </div> <!-- /container -->
</main>

<?php
include_once "../footer.php";
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/tpfinal/recursos/js/bootstrap.bundle.min.js"></script>
<script src="recursos/js/abmUsuario.js"></script>
<script type="text/javascript">
    $(document).ready(function (){
        $('#')

    });
</script>
</html>