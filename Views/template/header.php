<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXAMEN</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?=base_url?>assets/img/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?=base_url?>assets/css/styles.css" rel="stylesheet" />

</head>
<!--<body style="background-color: #F4F6F9">-->
<body style="background-color: #F4F6F9">

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light text-center">MÓDULOS</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action  p-3">Usuario</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>estudiante/listar">&nbsp&nbsp Estudiante</a>
                <a class="list-group-item list-group-item-action  p-3">Académico</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>apunte/listar">&nbsp&nbsp Apuntes</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>carrera/listar">&nbsp&nbsp Carrera</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>materia/listar">&nbsp&nbsp Materia</a>
            </div>
            <br>
        </div>
        <!--Find Sidebar-->

        <!-- Page content wrapper-->
        <div id="page-content-wrapper" >
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
<!--                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>-->
                    <button class="navbar-toggler" id="sidebarToggle"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="<?=base_url?>">SW APUNTES</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--Fin top Navigator-->
<!--            <div class="container-fluid">-->
<!--                <div class="row mb-2 mt-2">-->
<!--                    <div class="col-sm-6">-->
<!--                        <h1>Clientes</h1>-->
<!--                    </div>-->
<!--                    <div class="col-sm-6 mt-2">-->
<!--                        <ol class="breadcrumb float-end">-->
<!--                            <li class="breadcrumb-item"><a href="#}">Home</a></li>-->
<!--                            <li class="breadcrumb-item active">Clientes</li>-->
<!--                        </ol>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container-fluid">-->
<!--                <div class="row">-->
<!--                    <div class="col">-->
<!--                        <div class="card">-->
<!--                            <div class="card-header row align-items-center">-->
<!--                                <h4 class="card-title">Lista de Clientes&nbsp&nbsp</h4>-->
<!--                            </div>-->
<!--                            <div class="card-body">-->
<!--                                <p>asddsf</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
