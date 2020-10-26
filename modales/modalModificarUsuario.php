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
                <label for=""></label>
                <input type="text"hidden id="idpersona" name="idpersona" class="form-control input-sm">
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre" autocomplete="off" class="form-control input-sm">
                <label for="">Apellido</label>
                <input type="text" name="apellido" id="apellido" autocomplete="off" class="form-control input-sm">
                <label for="">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" class="form-control input-sm">
                <label for="">Password</label>
                <input type="text" name="" id="password" autocomplete="off" class="form-control input-sm">
                <label for="">Rol</label>
                <select name="" id="" class="form-control input-sm">
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
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning" id="actualizadatos">Modificar</button>
            </div>
            </form>
        </div>
    </div>
</div>