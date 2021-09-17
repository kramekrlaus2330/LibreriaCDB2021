<?php
	require_once('Conexion2.php');
	class Procesos2{


		public	function InsertarPedido($arg_ID,$arg_descripcion,$arg_Precio){	
			$modelo = new Conexion2();
            $conexion = $modelo->get_conexion2();
			$sql="INSERT INTO orders (id,customer_id, total_price, created, nombre, numero) VALUES(:id,:customer_id,:total_price,:created,:nombre, :numero)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':id', $arg_ID);
			$statement->bindParam(':customer_id', $arg_Nombre);
            $statement->bindParam(':total_price', $arg_descripcion);
            $statement->bindParam(':created', $arg_Precio);
			if(!$statement){
				return"Error al crear pedido";
			}else{
				$statement->execute();
				return "Registro hecho correctamente";
			}
        }
        public	function Insertarvv($arg_username){	
			$modelo = new Conexion2();
            $conexion = $modelo->get_conexion2();
            $sql="INSERT INTO user (username) VALUES(:username)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':username', $arg_username);
        }
        

		public function cargarPedidos2(){
		$rows= null;
		$modelo = new Conexion2();
		$conexion = $modelo->get_conexion2();
		$sql = "select * from orders";
		$statement = $conexion->prepare($sql);  
		$statement->execute();
		while ($result = $statement->fetch()){
			$rows[] = $result;
			} 
		return $rows;
        }
        
        public function cargarPedidos3(){
            $rows= null;
            $modelo = new Conexion2();
            $conexion = $modelo->get_conexion2();
            $sql = "select * from user";
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