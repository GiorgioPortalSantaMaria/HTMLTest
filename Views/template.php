<?php

namespace Views;

$template = new Template();

class Template
{

    public function __construct()
    {
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="<?php echo URL; ?>/EjercicioTestPHP/Views/template/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://kit.fontawesome.com/8fb41d994c.js" crossorigin="anonymous"></script>
            <title>Aplicación php</title>

            <style>
                .navbar-toggler:focus{
                    box-shadow: 0 0 0 0.25em  white;
                }
            </style>

        </head>

        <body>
            <div class="container m-8">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-primary bg-primary mt-1  border border-secondary">
                        <div class="container-fluid">

                            
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navHolder" aria-controls="navHolder" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa-solid fa-bars" style="color:white"></i>
                            </button>
                            <div class="navbar-collapse collapse" id="navHolder">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a href="<?php echo URL; ?>/EjercicioTestPHP/home" class="nav-link active">Home
                                            <span class="visually-hidden">

                                            </span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" id="estudianteNavMenu">Estudiantes
                                        </a>
                                        <ul class="dropdown-menu bg-primary" aria-labelledby="estudianteNavMenu">
                                            <li>
                                                <a href="<?php echo URL; ?>/EjercicioTestPHP/estudiantes" class="dropdown-item">Listado</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo URL; ?>/EjercicioTestPHP/estudiantes/agregar" class="dropdown-item">Agregar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" id="seccionNavMenu">Secciones</a>
                                        <ul class="dropdown-menu bg-primary" role="menu" aria-labelledby="seccionNavMenu">
                                            <li><a href="<?php echo URL; ?>/EjercicioTestPHP/secciones" class="dropdown-item">Listado</a></li>
                                            <li><a href="<?php echo URL; ?>/EjercicioTestPHP/secciones" class="dropdown-item">Agregar</a></li>
                                        </ul>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </nav>

                </div>

            <?php
        }


        public function __destruct()
        {
            ?>

            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            
        </body>

        </html>
<?php
        }
    }
?>