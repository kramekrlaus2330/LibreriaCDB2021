<!DOCTYPE html>
<html>
<head>
	<title>Confirmar</title>
	<link rel="stylesheet" type="text/css" href="../css/Confirmar.css">
    <link rel="icon" href="../img/logoink.png">
  <link rel="stylesheet" type="text/css" href="../css/nav-insertar.css">
    <link rel="stylesheet" href="../css/iconos-admin.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/insert2.css">
    <link rel="stylesheet" href="../img/fonts.css">
</head>
<body>

<?php

require_once '../MODELO/Conexion2.php';
require_once '../MODELO/Consulta.php';

$mensaje = null;
$nombre = "";
$descripcion = "";
$precio ="";
$exis ="";


@$nombre = $_POST['nombre'];
@$descripcion = $_POST['descripcion'];
@$precio = $_POST['precio'];
@$exis = $_POST['existencias'];
$img=(file_get_contents($_FILES['img']['tmp_name']));

if (strlen($nombre) > 0 && strlen($descripcion) > 0 && strlen($precio) > 0 && strlen($exis) > 0) {
    $consultas = new Consultas();
    $mensaje = $consultas->insertarProducto($nombre, $descripcion, $precio, $exis,$img);
    echo "<br><br>";
    echo "<a id='primero' href='Insertar.html'>Nuevo Producto</a>";
    echo "<a id='segundo' href='Indexcarrito.php'>Ver Catalogo</a><br>";
}else {
    echo "<p>Por favor completa los campos</p>";
    echo "<br><a id='tercero' href='Insertar.html'>Nuevo Producto</a>";

}
echo $mensaje;

?>

</body>
</html>
</body>
</html>