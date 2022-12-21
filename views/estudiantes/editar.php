<?php $secciones = $estudiantes->listarSecciones();?>
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-8">
            <h2 class="title">Editar estudiantes <?php echo $datos['nombre']; ?></h2>
            <form class="" action="" method="POST" enctype="multipart/form-data">
                <div class="bg-success p-2 mb-3 text-white">
                    <h3>Editar estudiante</h3>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre estudiante</label>
                    <input type="text" class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">edad</label>
                    <input type="number" class="form-control" value="<?php echo $datos['edad']; ?>" name="edad" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">promedio</label>
                    <input type="number" class="form-control" value="<?php echo $datos['promedio'] ?>" name="promedio" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sección actual <b><?php echo $datos['nombre_seccion']; ?></b></label>
                    <select name="id_seccion" class="form-select">
                    <?php while ($row = mysqli_fetch_array($secciones)) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                    <?php  } ?>
                    </select>
                </div>
                <input type="hidden"  value="<?php echo $datos['id'] ?>" name="id" required>
                <button type="submit" class="btn btn-success">Editar</button>
                <button type="reset" class="btn btn-warning">Borrar</button>
            </form>
        </div>
    </div>
</div>