<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-8">
            <h2>Editar la <?php echo $datos['nombre'] ?></h2>
            <form class="" action="" method="POST" enctype="multipart/form-data">
                <div class="bg-success p-2 mb-3 text-white">
                    <h3>Editar la seccion</h3>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">nombre de la seccion</label>
                    <input type="text" class="form-control" value="<?php echo $datos['nombre']?>" name="nombre" required>
                </div>
                <input type="hidden" value="<?php echo $datos['id']; ?>"  name="id">
                <button type="submit" class="btn btn-success">Editar</button>
                <button type="reset" class="btn btn-warning">Borrar</button>
            </form>
        </div>
    </div>
</div>