<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-8">
            <form class="" action="" method="POST" enctype="multipart/form-data">
                <div class="bg-success p-2 mb-3 text-white">
                    <h3>Registro de estudiantes</h3>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre estudiante</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">edad</label>
                    <input type="number" class="form-control" name="edad" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">promedio</label>
                    <input type="number" class="form-control" name="promedio" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sección</label>
                    <select name="id_seccion" class="form-select">
                    <?php while ($row = mysqli_fetch_array($datos)) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                    <?php  } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Imagen</label>
                    <input type="file" class="form-control" name="imagen" required>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-warning">Borrar</button>
            </form>
        </div>
    </div>
</div>