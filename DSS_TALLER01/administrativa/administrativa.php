<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TextilExport</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">TextilExport</h1>
    <div class="row">
        <div class="col-sm-12 ">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nuevo producto</a>
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" style="margin-top:20px;">
                <thead>
                    <th>Codigo Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th>Botones</th>
                </thead>
                <tbody>
                    <?php
                    $productos=simplexml_load_file("../productos.xml");
                    foreach($productos->producto as $produ){
                    ?>
                    <tr>
                        <td><?=$produ->codigo?></td>
                        <td><?=$produ->nombre?></td>
                        <td><?=$produ->descripcion?></td>

                        <td><img src="../img/<?=$produ->img?>"  alt="" width="300" height="300"></td>

                        <td><?=$produ->categoria?></td>
                        <td class="align-text-bottom" ><?=$produ->precio?></td>
                        <td><?=$produ->existencias?></td>
                        <td>
                            <a href="#editar_<?=$produ->codigo?>" data-toggle="modal" class="btn btn-primary">Editar</a>
                            <a href="#delete_<?=$produ->codigo?>" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php
                    include('borrar_modal.php');
                    include('editar_modal.php');
                }
                ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<?php include('nueva_modal.php'); ?>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>