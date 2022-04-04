
    <div class="row">
        
        <h3 class="col-6 m-auto text-center">Vista del estudiante principal</h3>
    </div>

    <?php 
        $datos = $estudiantes->index();

        while($row = mysqli_fetch_array($datos)){
            echo $row['nombre'];
        }
    ?>