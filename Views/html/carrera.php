<div class="container-fluid">
    <div class="row mb-2 mt-2">
        <div class="col-sm-6">
            <h1>CARRERAS</h1>
        </div>
        <div class="col-sm-6 mt-2">
            <ol class="breadcrumb float-end">
                <li class="breadcrumb-item"><a href="<?=base_url?>">Home</a></li>
                <li class="breadcrumb-item active">Carreras</li>
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
                    <form action="<?=base_url?>carrera/guardarCarrera" method="POST">
                        <div class="row mt-3">
                            <div class="form-group col-md-6">
                                <label class="mb-1">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="mb-1">Descripción</label>
                                <textarea type="text" name="descripcion" id="descripcion" class="form-control" autocomplete="off"></textarea>
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
                    <h4 class="card-title">Lista de Carreras&nbsp&nbsp</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped text-center align-text-bottom mt-3 mb-4">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--                            --><?php //var_dump($this->estudiantes) ?>
                            <?php foreach ($this->carreras as $row => $carrera) { ?>
                                <tr>
                                    <th scope="row"><?php echo $carrera['id'] ?></th>
                                    <td scope="row"><?php echo $carrera['nombre'] ?></td>
                                    <td scope="row"><?php echo $carrera['descripcion'] ?></td>
                                    <td scope="row">
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarModal<?php echo $carrera['id'] ?>">
                                            Editar
                                        </button>

                                        <!--modal editar Inicio-->
                                        <div class="modal fade" id="editarModal<?php echo $carrera['id'] ?>" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Editar Carrera</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <form action="<?=base_url?>carrera/modificarCarrera" method="POST">
                                                        <div class="modal-body">
                                                            <div class="form-group mb-3">
                                                                <label for="recipient-name" class="col-form-label">id:</label>
                                                                <input type="text" value="<?php echo $carrera['id'] ?>" readonly class="form-control" name="id" id="id">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="recipient-name" class="col-form-label">Nombre:</label>
                                                                <input type="text" value="<?php echo $carrera['nombre'] ?>" class="form-control" name="nombre" id="nombre">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="recipient-name" class="col-form-label">Descripción:</label>
                                                                <input type="text" value="<?php echo $carrera['descripcion'] ?>" class="form-control" name="descripcion" id="descripcion">
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