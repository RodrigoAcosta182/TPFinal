<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-dark text-white">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="formNombre">Nombre</label>
                                    <input type="text" class="form-control" placeholder="First name" id="formNombre">
                                </div>
                                <div class="col">
                                    <label for="formApellido">Apellido</label>
                                    <input type="text" class="form-control" placeholder="Last name" id="formApellido">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="formUsuario">Usuario</label>
                            <input type="text" class="form-control" id="formUsuario" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="elegirTipoSelect">Tipo de usuario</label>
                                <select class="form-control" id="elegirTipoSelect">
                                    <option value="1">Administrador</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">Chofer</option>
                                </select>
                            </div>
                        </div>
                        </div>
                            <div class="modal-footer bg-dark">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-info">Agregar</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div>