<div class="container">
    <div class="row mb-5">
        <table class="table border">
            <div class="bg-info text-white p-1 mb-0"> 
              <h3>Lista de estudiantes</h3>
            </div>
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">promedio</th>
                    <th scope="col">Acción</th>
                    <th scope="col">Seccion</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($row = mysqli_fetch_array($datos)){?> 
                <tr>
                    <td><?php echo $row['nombre'];?></td>
                    <td><?php echo $row['edad'];?></td>
                    <td><?php echo $row['promedio'];?></td>
                    <td><?php echo $row['nombre_seccion'];?></td>
                    <td>
                    <a class="text-white text-decoration-none btn btn-warning" href="http://localhost/CRUDMVC/estudiantes/editar/<?php echo $row['id']?>">EDITAR</a>
                    <a class="text-white text-decoration-none btn btn-danger" href="http://localhost/CRUDMVC/estudiantes/eliminar/<?php echo $row['id']?>">ELIMINAR</a> 
                    </td>
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>
</div>