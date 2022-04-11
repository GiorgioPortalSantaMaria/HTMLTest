<div class="row bg-light">

    <h3 class="col-6 m-auto mt-2 text-center text-dark">Vista del estudiante principal</h3>

    <p class="text-dark">
            
        <?php

        $spanClasses = "";
        $datos = $estudiantes->index();

        while ($row = mysqli_fetch_array($datos)) {

            echo "<img class='$spanClasses' src='". $row["imagen"] . " '>";
        }
        ?>
    </p>
</div>