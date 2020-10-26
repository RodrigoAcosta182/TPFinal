<!-- Modal -->
<div class="modal fade" id="ModificarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/TPFinal/funciones/abmUsuario.php" method="post"
                <input type="hidden"  id="idpersona">
                <label for="">Nombre</label>
                <input type="text" name="" id="nombre" class="form-control input-sm">
                <label for="">Apellido</label>
                <input type="text" name="" id="apellido" class="form-control input-sm">
                <label for="">Email</label>
                <input type="text" name="" id="email" class="form-control input-sm">
                <label for="">Password</label>
                <input type="text" name="" id="password" class="form-control input-sm">
                <label for="">Activo</label>
                <input type="text" name="" id="active" class="form-control input-sm">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning" id="actualizadatos">Modificar</button>
            </div>
            </form>
        </div>
    </div>
</div>