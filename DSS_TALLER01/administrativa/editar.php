<?php
if(isset($_POST['codigo'], $_POST['nombre'], $_POST['descripcion'], $_POST['categoria'], $_POST['precio'], $_POST['existencias'])){
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $Categoria = $_POST['categoria'];
  $Precio = $_POST['precio'];
  $Existencias = $_POST['existencias'];

  $xml = simplexml_load_file('../productos.xml');
  foreach($xml->producto as $produ){
    if($produ->codigo == $codigo){
      $codigo = $_POST['codigo'];
      $produ->nombre = $nombre;
      $produ->descripcion = $descripcion;
      $produ->categoria = $Categoria;
      $produ->precio = $Precio;
      $produ->existencias = $Existencias;
      break;
    }
  }
  $xml->asXML('../productos.xml');
  header("location:administrativa.php");
}
else{
  echo'<h1>no serasl</h1>';
}
header("location:administrativa.php");
?>
