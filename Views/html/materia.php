<div class="container-fluid">
    <div class="row mb-2 mt-2">
        <div class="col-sm-6">
            <h1>MATERIAS</h1>
        </div>
        <div class="col-sm-6 mt-2">
            <ol class="breadcrumb float-end">
                <li class="breadcrumb-item"><a href="<?=base_url?>">Home</a></li>
                <li class="breadcrumb-item active">Materias</li>
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
                    <form action="<?=base_url?>materia/guardarMateria" method="POST">
                        <div class="row mt-3">
<!--                            Lado Izquierdo Inicio-->
                            <div class="form-group col-md-6">
                                <h4 class="text-center">Materia</h4>
                                <div class="form-group col-md-12">
                                    <label class="mb-1">ID</label>
                                    <input type="text" name="id" id="id" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="mb-1">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-12 mt-3">
                                    <label class="mb-1">Sigla</label>
                                    <input type="text" name="sigla" id="sigla" class="form-control" autocomplete="off">
                                </div>
<!--                                <div class="form-group col-md-12" id="detalles">-->
<!--                                </div>-->
                                <div class="form-group col-md-12 mt-3">
                                    <h5> Lista de Carreras </h5>
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
                                            <?php foreach ($this->carreras as $row => $carrera) { ?>
                                                <tr id="<?php echo $row ?>">
                                                    <td><?php echo $carrera["id"] ?></td>
                                                    <td><?php echo $carrera["nombre"] ?></td>
                                                    <td><?php echo $carrera["descripcion"] ?></td>
                                                    <td><a class="btn btn-primary btn-sm" onclick="agregarCarrito(<?php echo $row ?>)">Agregar</a></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
<!--                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#verModal">Ver</button>-->
                                </div>
                            </div>
<!--                            Lado izquierdo Fin-->

<!--                            Lado Derecho Inicio-->
                            <div class="col-md-6">
                                <h4 class="text-center">Carreras</h4>
                                <div class="form-group col-md-12" id="detalles">
                                </div>
                                <div class="form-group col-md-12 mt-3">
                                    <div class="table-responsive">
                                        <table id="lista-carreras" class="table table-bordered table-sm table-striped text-center align-text-bottom mt-3 mb-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-body">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
<!--                            Lado derecho fin-->
                        </div>
                    </form>
                    <div class="modal fade" id="verModal" tabindex="-1" aria-labelledby="verModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ver Nota Alquiler</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?=base_url?>carrera/ver" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label class="form-label"> Ingrese el id de la Carrera: </label>
                                            <input type="text" id="id" class="form-control" name="id" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Ver</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="card mb-3">
                <div class="card-header row align-items-center">
                    <h4 class="card-title">Lista de Materias&nbsp&nbsp</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped text-center align-text-bottom mt-3 mb-4">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Sigla</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
<!--                            --><?php //var_dump($this->materia); ?>
                                <?php foreach ($this->materia as $key => $matery) { ?>
                                    <tr>
                                        <td><?php echo $matery["id"] ?></td>
                                        <td><?php echo $matery["nombre"] ?> </td>
                                        <td><?php echo $matery["sigla"] ?></td>
                                        <td>
                                            <a type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#verMasModal<?php echo $matery['id'] ?>">
                                                ver mas
                                            </a>
                                            <div class="modal fade" id="verMasModal<?php echo $matery['id'] ?>" tabindex="-1" aria-labelledby="verMasModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ver Detalles</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="<?=base_url?>carrera/modificarCarrera" method="POST">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-3">
                                                                            <label for="recipient-name" class="col-form-label">id:</label>
                                                                            <input type="text" value="<?php echo $matery['id'] ?>" readonly class="form-control" name="id" id="id">
                                                                        </div>
                                                                        <div class="form-group mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                                                                            <input type="text" value="<?php echo $matery['nombre'] ?>" class="form-control" name="nombre" id="nombre" readonly>
                                                                        </div>
                                                                        <div class="form-group mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Sigla:</label>
                                                                            <input type="text" value="<?php echo $matery['sigla'] ?>" class="form-control" name="sigla" id="sigla" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered table-sm table-striped text-center align-text-bottom mt-3 mb-4">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th scope="col">Id Materia</th>
                                                                                    <th scope="col">Id Carrera</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <?php foreach ($matery["MateriaCarrera"] as $key => $mat) { ?>
                                                                                    <tr>
                                                                                        <td><?php echo $mat["materia_id"] ?> </td>
                                                                                        <td><?php echo $mat["carrera_id"] ?> </td>
                                                                                    </tr>
                                                                                <?php } ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
<script>
    var i = 0;

    function agregarCarrito(index) {
        var carrera = document.getElementById(index);
        id = carrera.getElementsByTagName("td")[0].innerHTML;
        nombre = carrera.getElementsByTagName("td")[1].innerHTML;
        descripcion = carrera.getElementsByTagName("td")[2].innerHTML;

        row = '<tr><td>' + id + '</td> <td>' + nombre + '</td> <td>' + descripcion + '</td> </tr>';
        $("#lista-carreras").append(row);
        inputForm = '<input type="hidden" name="MateriaCarrera[' + i + '][carrera_id]" value="' + id + '">';
        $("#detalles").append(inputForm);
        i = i + 1;
    }
</script>