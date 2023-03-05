<?php
$codigo = $_GET['cod'];
$productos = simplexml_load_file("../productos.xml");
$index = 0;
$i = 0;
foreach ($productos->producto as $produ) {
    if ($produ->codigo == $codigo) {
        $index = $i;
        $imagen = $produ->img;
        break;
    }
    $i++;
}
unset($productos->producto[$index]);
file_put_contents("../productos.xml", $productos->asXML());

header('location:administrativa.php');
?>