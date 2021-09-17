<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index15.php');
	}

	include 'model/conexion.php';
	$id2 = $_POST['id2'];
	$nombre= $_POST['txt2name'];
	$descripcion = $_POST['txt2desc'];
	$precio = $_POST['txt2price'];
	$existencias = $_POST['txt2exis'];

	$sentencia = $bd->prepare("UPDATE products SET name = ?, description = ?, price = ?, 
												existencias = ? WHERE id = ?;");
	$resultado = $sentencia->execute([$nombre,$descripcion,$precio,$existencias, $id2]);

	if ($resultado === TRUE) {
		header('Location: index15.php');
	}else{
		echo "Error";
	}
?>