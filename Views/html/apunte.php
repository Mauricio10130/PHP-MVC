<div class="container-fluid">
    <div class="row mb-2 mt-2">
        <div class="col-sm-6">
            <h1>APUNTES</h1>
        </div>
        <div class="col-sm-6 mt-2">
            <ol class="breadcrumb float-end">
                <li class="breadcrumb-item"><a href="<?=base_url?>">Home</a></li>
                <li class="breadcrumb-item active">Apuntes</li>
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
                    <form action="<?=base_url?>apunte/guardarApunte" method="POST">
                        <div class="row mt-3">
                            <div class="form-group col-md-3"></div>
                            <div class="form-group col-md-6">
                                <label class="mb-1">Título</label>
                                <input type="text" name="titulo" id="titulo" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-3"></div>
                            <div class="form-group col-md-6">
                                <label class="mb-1">Detalle</label>
                                <textarea name="detalle" id="detalle" class="form-control" rows="10" autocomplete="off"></textarea>
<!--                                <button class="btn btn-success" onclick="deshacer()">Deshacer</button>-->
<!--                                <button class="btn btn-success" onclick="rehacer()">Rehacer</button>-->
<!--                                <button class="btn btn-primary" onclick="guardar()">Guardar</button>-->
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-3"></div>
                            <div class="form-group col-md-6">
                                <label class="mb-1">Bibliografias</label>
                                <textarea name="bibliografia" id="bibliografia" class="form-control" rows="2" autocomplete="off"></textarea>
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-3"></div>
                            <div class="form-group col-md-6">
                                <label class="mb-1">Estudiante</label>
                                <select class="form-control" id="estudiante_id" name="estudiante_id">
                                    <?php foreach ($this->estudiantes as $row => $estudiante) { ?>
                                        <option value="<?php echo $estudiante["id"] ?>"> <?php echo $estudiante["nombre"] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-3"></div>
                            <div class="form-group col-md-6">
                                <label class="mb-1">Materia</label>
                                <select class="form-control" id="materia_id" name="materia_id">
                                    <?php foreach ($this->materias as $row => $materia) { ?>
                                        <option value="<?php echo $materia["id"] ?>"> <?php echo $materia["nombre"] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row mt-4 mb-4">
                            <div class="form-group col-md-3"></div>
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <div class="form-group col-md-3"></div>
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
                    <h4 class="card-title">Lista de Apuntes&nbsp&nbsp</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped text-center align-text-bottom mt-3 mb-4">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Título</th>
                                <th scope="col">Detalle</th>
                                <th scope="col">Bibliografia</th>
                                <th scope="col">Estudiante</th>
                                <th scope="col">Materia</th>
                                <th scope="col">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--                            --><?php //var_dump($this->estudiantes) ?>
                            <?php foreach ($this->apuntes as $row => $apunte) { ?>
                                <tr>
                                    <th scope="row"><?php echo $apunte['id'] ?></th>
                                    <td scope="row"><?php echo $apunte['titulo'] ?></td>
                                    <td scope="row"><?php echo $apunte['detalle'] ?></td>
                                    <td scope="row"><?php echo $apunte['bibliografia'] ?></td>
                                    <td scope="row"><?php echo $apunte['estudiante_id'] ?></td>
                                    <td scope="row"><?php echo $apunte['materia_id'] ?></td>
                                    <td scope="row">
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarModal<?php echo $apunte['id'] ?>">
                                            Editar
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#EliminarModal<?php echo $apunte['id'] ?>">
                                            Eliminar
                                        </button>

                                        <!--modal editar Inicio-->
                                        <div class="modal fade" id="editarModal<?php echo $apunte['id'] ?>" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Editar Carrera</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <form action="<?=base_url?>apunte/modificarApunte" method="POST">
                                                        <div class="modal-body">
                                                            <div class="form-group mb-3">
                                                                <label for="recipient-name" class="col-form-label">id:</label>
                                                                <input type="text" value="<?php echo $apunte['id'] ?>" readonly class="form-control" name="id" id="id">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="recipient-name" class="col-form-label">Título:</label>
                                                                <input type="text" value="<?php echo $apunte['titulo'] ?>" class="form-control" name="titulo" id="titulo">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="recipient-name" class="col-form-label">Detalle:</label>
<!--                                                                <input type="text" value="--><?php //echo $apunte['detalle'] ?><!--" class="form-control" name="detalle" id="detalle">-->
                                                                <textarea class="form-control" rows="10" name="detalle" id="detalle"><?php echo $apunte['detalle'] ?></textarea>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="recipient-name" class="col-form-label">Bibliografia:</label>
<!--                                                                <input type="text" value="--><?php //echo $apunte['bibliografia'] ?><!--" class="form-control" name="bibliografia" id="bibliografia">-->
                                                                <textarea class="form-control" rows="2" name="bibliografia" id="bibliografia"><?php echo $apunte['bibliografia'] ?></textarea>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label class="form-label"> Estudiante: </label>
                                                                <select class="form-control" id="estudiante_id" name="estudiante_id">
                                                                    <?php foreach ($this->estudiantes as $row => $estudiante) { ?>
                                                                        <option value="<?php echo $estudiante["id"] ?>" <?php echo $estudiante['id'] == $apunte['estudiante_id'] ? "selected" : "" ?>>
                                                                            <?php echo $estudiante["nombre"]  ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label class="form-label"> Materia: </label>
                                                                <select class="form-control" id="materia_id" name="materia_id">
                                                                    <?php foreach ($this->materias as $row => $materia) { ?>
                                                                        <option value="<?php echo $materia["id"] ?>" <?php echo $materia['id'] == $apunte['materia_id'] ? "selected" : "" ?>>
                                                                            <?php echo $materia["nombre"]  ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
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

<!--                                        Modal Eliminar Inicio-->
                                        <div class="modal fade" id="EliminarModal<?php echo $apunte['id'] ?>" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Apunte</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Estas seguro de eliminar el Apunte <strong> <?php echo $apunte['titulo'] ?> </strong> </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a type="submit" href="<?=base_url?>apunte/eliminar&id=<?php echo $apunte['id'] ?>" class="btn btn-primary">Eliminar </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
<!--                                        Modal Eliminar Fin-->
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
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
<!--<script>-->
<!--    class Caretaker{-->
<!--        #mementos;-->
<!--        #puntero;-->
<!--        constructor() {-->
<!--            this.#mementos = [];-->
<!--            this.#puntero = -1;-->
<!--        }-->
<!--        addMemento(memento){-->
<!--            this.#mementos.push(memento);-->
<!--            this.#puntero = this.#mementos.length -1;-->
<!--        }-->
<!--        deshacer(){-->
<!--            if(this.#puntero > 0){-->
<!--                this.#puntero = this.#puntero -1;-->
<!--            }-->
<!--            return this.#mementos[this.#puntero];-->
<!--        }-->
<!--        rehacer(){-->
<!--            if (this.#puntero < this.#mementos.length - 1){-->
<!--                this.#puntero = this.#puntero +1;-->
<!--            }-->
<!--            return this.#mementos[this.#puntero];-->
<!--        }-->
<!--    }-->
<!---->
<!--    class Memento{-->
<!--        #state;-->
<!---->
<!--        constructor(state) {-->
<!--            this.#state = state;-->
<!--        }-->
<!--    }-->
<!---->
<!--    class EditorDetalle{-->
<!--        #detalle;-->
<!--        constructor(height, width) {-->
<!--            this.#detalle = '';-->
<!--        }-->
<!--        getTexto(){-->
<!--            return this.#detalle;-->
<!--        }-->
<!--        setTexto(texto){-->
<!--            this.#detalle = texto;-->
<!--        }-->
<!--        save(){-->
<!--            var copia = new EditorDetalle();-->
<!--            copia.setTexto(this.#detalle);-->
<!--            return new Memento(copia);-->
<!--        }-->
<!---->
<!--        restore(memento){-->
<!--            var e = memento.getState();-->
<!--            this.#detalle = e.getTexto();-->
<!--        }-->
<!--    }-->
<!---->
<!--    var editor = null;-->
<!--    var caretaker = null;-->
<!--    $('document').ready(function (){-->
<!--        inicializar();-->
<!--    });-->
<!---->
<!--    function inicializar(){-->
<!--        caretaker = new Caretaker();-->
<!--        editor = new EditorDetalle('');-->
<!--        caretaker.addMemento(editor.save());-->
<!--    }-->
<!---->
<!--    function deshacer(){-->
<!--        console.log('deshacer');-->
<!--        var memento = caretaker.deshacer();-->
<!--        editor.restore(memento);-->
<!--        $("#detalle").val(editor.getTexto());-->
<!--    }-->
<!--    function rehacer(){-->
<!--        console.log('rehacer');-->
<!--        var memento = caretaker.rehacer();-->
<!--        editor.restore(memento);-->
<!--        $("#detalle").val(editor.getTexto());-->
<!--    }-->
<!--    function guardar(){-->
<!--        console.log('guardar');-->
<!--        editor.setTexto($("#detalle").val());-->
<!--        caretaker.addMemento(editor.save());-->
<!--    }-->
<!--</script>-->