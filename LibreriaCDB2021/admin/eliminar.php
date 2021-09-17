<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include 'model/conexion.php';
	$sentencia = $bd->prepare("DELETE FROM products WHERE id = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: index15.php');
	}else{
		echo "Error";
	}

?>