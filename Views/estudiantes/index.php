<div class="row bg-light">

    <h3 class="col-6 m-auto mt-2 text-center text-dark">Vista del estudiante principal</h3>

    <p class="text-dark">
            
        <?php

        $spanClasses = "d-inline m-1";
        $datos = $estudiantes->index();

        while ($row = mysqli_fetch_array($datos)) {

            echo "<span class='$spanClasses'>" . $row['nombre'] . "</span>";
        }
        ?>
    </p>
</div>