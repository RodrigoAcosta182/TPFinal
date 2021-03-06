 <?php
 include_once("Permisos.php");
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
<?php include "header.php"?>
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
            <table class="table table-hover table-dark">
                <thead>
                <tr class="bg-info">
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Active</th>
                    <th scope="col">Accion</th>
                </tr>
                </thead>
                <tbody>

                <?php
               foreach ($usuario as $datos){
                    ?>
                    <tr>
                        <td><?php echo $datos["Nombre"] ?></td>
                        <td><?php echo $datos["Apellido"] ?></td>
                        <td><?php echo $datos["Email"]?> </td>
                        <td><?php echo $datos["Descripcion"]?> </td>
                        <td><?php echo $datos["Active"]?> </td>
                        <td>
                            <a href="controller/modificarUsuario.php?modificar=<?php echo  $datos['Id']?>" class="btn btn-danger">Modificar</a>
                            <a href="funciones/abmUsuarioEliminar.php?eliminar=<?php echo  $datos[0]?>" class="btn btn-danger" onclick="return confirm('DESEA ELIMINAR EL USUARIO DE MANERA VIOLENTA?')">Eliminar</a>
                        </td>

                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div> <!-- /container -->
</main>

<?php
include_once "footer.php";
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

<?php
include ("modales/modalModificarUsuario.php");
?>