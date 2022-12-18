<h1>Hola mundo</h1>
<?php  

    $datos = $estudiantes->index();
    while ($row = mysqli_fetch_array($datos)) {
        echo "El nombre es  ". $row['nombre'];
    }

?>