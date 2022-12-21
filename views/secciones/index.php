<div class="container">
    <div class="row mb-5">
    <table class="table border">
            <div class="bg-info text-white p-1 mb-0"> 
              <h3>Lista de secciones</h3>
            </div>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($row = mysqli_fetch_array($datos)){?> 
                <tr>
                   <td><?php echo $row['id'];?></td>
                   <td><?php echo $row['nombre'];?></td>
                   <td>
                   <a class="text-white text-decoration-none btn btn-warning" href="http://localhost/CRUDMVC/secciones/editar/<?php echo $row['id']?>">EDITAR</a>
                   <a class="text-white text-decoration-none btn btn-danger" href="http://localhost/CRUDMVC/secciones/eliminar/<?php echo $row['id']?>">ELIMINAR</a> 
                  </td>
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>
</div>