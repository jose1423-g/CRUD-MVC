<div class="container">
    <div class="row mb-5">
        <table class="table border">
            <div class="bg-info text-white p-1 mb-0"> 
              <h3>Lista de estudiantes</h3>
            </div>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">promedio</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($row = mysqli_fetch_array($datos)){?> 
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nombre'];?></td>
                    <td><?php echo $row['edad'];?></td>
                    <td><?php echo $row['promedio'];?></td>
                    <td>
                    <button class="btn btn-warning">EDITAR</button>
                    <button class="btn btn-danger">ELIMINAR</button> 
                    </td>
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>
</div>