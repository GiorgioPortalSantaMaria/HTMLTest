<?php namespace Views;

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
                <link href="<?php echo URL;?>/EjercicioTestPHP/Views/template/css/bootstrap.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                <title>Aplicación php</title>

            </head>

            <body>
                <div class="container">

    <?php
        }


        public function __destruct()
        {
    ?>
                </div>
            </body>

            </html>
    <?php
        }
    }
?>