<?php session_start()?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand " href="/TPFinal/index.php">Garlopa Transfer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/TPFinal/abmUsuario.php">Permisos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Estadisticas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php#nosotros">Nosotros</a>
            </li>
            <!--
         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
             <div class="dropdown-menu" aria-labelledby="dropdown01">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
                 <a class="dropdown-item" href="#">Something else here</a>
             </div>
         </li>-->
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