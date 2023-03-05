<head>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<?php
$productos = simplexml_load_file("../productos.xml");
$categoriaSeleccionada = "";
if (isset($_POST['categoria'])) {
    $categoriaSeleccionada = $_POST['categoria'];
}
?>
<div class="row">
    <?php foreach ($productos->producto as $produ) :
        if ($categoriaSeleccionada == "" || $categoriaSeleccionada == $produ->categoria) :
            ?>
            <div class="col-sm-6 col-md-4">
                <div class="card" style="margin-top:20px;" id="targeta">
                    <img class="card-img-top" src="../img/<?= $produ->img ?>" alt="" width="300" height="300">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produ->nombre ?></h5>
                        <p class="card-text">Precio: $<?= $produ->precio ?></p>
                        <p class="card-text">Categoria: <?= $produ->categoria ?></p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" id="btnVer" data-toggle="modal" data-target="#modalProducto<?= $produ->id ?>">Ver Producto</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;
    endforeach; ?>
</div>
