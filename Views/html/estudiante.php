<div class="container-fluid">
    <div class="row mb-2 mt-2">
        <div class="col-sm-6">
            <h1>ESTUDIANTES</h1>
        </div>
        <div class="col-sm-6 mt-2">
            <ol class="breadcrumb float-end">
                <li class="breadcrumb-item"><a href="<?=base_url?>">Home</a></li>
                <li class="breadcrumb-item active">Estudiantes</li>
            </ol>
        </div>
        <!--Inicio del Mensaje-->
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
            <div class="toast-header">
                <img src="" class="rounded mr-2" alt="">
                <strong class="mr-auto">Mensaje</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <?php echo $this->message; ?>
            </div>
        </div>
        <!--Fin del Mensaje-->
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header row align-items-center">
                    <h4 class="card-title">Datos Generales&nbsp&nbsp</h4>
                </div>
                <div class="card-body">
                    <form action="<?=base_url?>estudiante/guardarEstudiante" method="POST">
                        <div class="row mt-3">
                            <div class="form-group col-md-6">
                                <label class="mb-1">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-6">
                                <label class="mb-1">Correo</label>
                                <input type="email" name="correo" id="correo" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1">Edad</label>
                                <input type="number" name="edad" id="edad" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-6">
                                <label class="mb-1">Genero</label>
                                <input type="text" name="genero" id="genero" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="row mt-4 mb-4">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header row align-items-center">
                    <h4 class="card-title">Lista de Estudiantes&nbsp&nbsp</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped text-center align-text-bottom mt-3 mb-4">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
<!--                            --><?php //var_dump($this->estudiantes) ?>
                                <?php foreach ($this->estudiantes as $row => $estudiante) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $estudiante['id'] ?></th>
                                        <td scope="row"><?php echo $estudiante['nombre'] ?></td>
                                        <td scope="row"><?php echo $estudiante['apellidos'] ?></td>
                                        <td scope="row"><?php echo $estudiante['correo'] ?></td>
                                        <td scope="row"><?php echo $estudiante['edad'] ?></td>
                                        <td scope="row"><?php echo $estudiante['genero'] ?></td>
                                        <td scope="row">
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarModal<?php echo $estudiante['id'] ?>">
                                                Editar
                                            </button>

                                            <!--modal editar Inicio-->
                                            <div class="modal fade" id="editarModal<?php echo $estudiante['id'] ?>" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editar Estudiante</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <form action="<?=base_url?>estudiante/modificarEstudiante" method="POST">
                                                            <div class="modal-body">
                                                                <div class="form-group mb-3">
                                                                    <label for="recipient-name" class="col-form-label">id:</label>
                                                                    <input type="text" value="<?php echo $estudiante['id'] ?>" readonly class="form-control" name="id" id="id">
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                                                                    <input type="text" value="<?php echo $estudiante['nombre'] ?>" class="form-control" name="nombre" id="nombre">
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Apellidos:</label>
                                                                    <input type="text" value="<?php echo $estudiante['apellidos'] ?>" class="form-control" name="apellidos" id="apellidos">
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Correo:</label>
                                                                    <input type="email" value="<?php echo $estudiante['correo'] ?>" class="form-control" name="correo" id="correo">
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Edad:</label>
                                                                    <input type="number" value="<?php echo $estudiante['edad'] ?>" class="form-control" name="edad" id="edad">
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Género:</label>
                                                                    <input type="text" value="<?php echo $estudiante['genero'] ?>" class="form-control" name="genero" id="genero">
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--modal editar Fin-->
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>