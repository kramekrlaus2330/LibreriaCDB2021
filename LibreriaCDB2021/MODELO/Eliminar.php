<?php

 	require_once('Conexion.php');
 	require_once('Procesos.php');
 	if (isset ($_GET['id'])){
 		$id_producto = $_GET['id'];
 		$consultas = new Procesos();
 		$mensaje = $consultas->eliminarPedido($id_pedido);
 		echo $mensaje;
 		echo "<div><a href='../verproductos.php'>Volver a mis pedidos</a> </div>";
 	}
 	

?>