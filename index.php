<?php
    require "Config/Autoload.php";
    Config\Autoload::run();
    $estudiante = new Models\Estudiante();
    $estudiante->set("id", 11);
    $datos = $estudiante->view();

    $nombre = $datos["nombre"];

    echo "Ho\nla  <b>$nombre</b><br>\n";
    echo "Encantado\nde conocerte"

?>