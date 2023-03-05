<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>“TextilExport”</title>
    <link rel="stylesheet"  type="text/css" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body id="body">

<header id = "menuHeader">
    <nav id = "nav">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="../administrativa/administrativa.php">Administrativo</a></li>
            <li><a href="#">Repositorio</a></l>
        </ul>
    </nav>
</header>


<div class="container">

    <h1 id ="titulo">TextilExport</h1>
    <div class="row">
    <form method="POST">

        <div class="row g-3">
            <div class="col">
                <label for="categoria">Seleccione una categoría:</label>
                <select class="form-control" id="categoria" name="categoria">
                    <option value="">Todas las categorías</option>
                    <option value="Textil">Textil</option>
                    <option value="Promocional">Promocinal</option>
                </select>
            </div>
            <div class="col">
                <button id = "btnFiltrar" type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>

    </form>

    <?php include 'php/productos.php'; ?>
    </div>
</div>
<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>