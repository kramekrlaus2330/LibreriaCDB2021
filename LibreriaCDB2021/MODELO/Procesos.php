<?php
	require_once('Conexion2.php');
	class Procesos{
		public function cargarPedidos(){
		$rows= null;
		$modelo = new Conexion2();
		$conexion = $modelo->get_conexion2();
		$sql = "select * from pedidos";
		$statement = $conexion->prepare($sql);  
		$statement->execute();
		while ($result = $statement->fetch()){
			$rows[] = $result;
			} 
		return $rows;
		}

		public function eliminarpedido($arg_id_pedido){
	 	$modelo = new Conexion();
	 	$conexion = $modelo->get_conexion2();
	 	$sql= "delete from productos where id = :id";
	 	$statement = $conexion-> prepare($sql);
	 	$statement-> bindParam(':id', $arg_id_pedido);
	    if (!$statement){
	    	return "error al eliminar producto";
	    }else{
	    	$statement->execute();
	    	return "Producto eliminado correctamente";
	    }
	 }
	} 
?>