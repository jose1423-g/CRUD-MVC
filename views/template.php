<?php

namespace views;

$Template = new Template();

class Template
{

    public function __construct()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CRUC MVC</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="/CRUDMVC/views/template/css/style.css">
        </head>

        <body>
            <nav class="navbar navbar-expand-lg navbar navbar-light shadow-sm p-3 mb-3 bg-body">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <h1 class="text-primary mb-0">CRUD-MVC</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/CRUDMVC/estudiantes/">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Estudiantes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="http://localhost/CRUDMVC/estudiantes/">Lista</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/CRUDMVC/estudiantes/agregar">Agregar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Secciones
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="http://localhost/CRUDMVC/secciones/">Listado</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/CRUDMVC/secciones/agregar">Agregar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <?php
    }
    public function __destruct()
    {

        ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>

        </html>
<?php
    }
}
?>