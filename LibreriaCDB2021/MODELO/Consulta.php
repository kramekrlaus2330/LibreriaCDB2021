<?php
//consulta hecha para poder insertar productos desde la pc y no necesariamente en phpmyadmin
require_once '../MODELO/Conexion.php';
    class Consultas{
        public function insertarProducto($arg_nombre, $arg_descripcion, $arg_precio, $arg_existen,$arg_img){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion1();
            $sql = "insert into products (name, description,price,existencias,img) values(:nombre, :descripcion, :precio, :existencias, :img)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':nombre', $arg_nombre);
            $statement->bindParam(':descripcion', $arg_descripcion);
            $statement->bindParam(':precio', $arg_precio);
            $statement->bindParam(':existencias', $arg_existen);
            $statement->bindParam(':img',$arg_img);
            if (!$statement) {
                return "<p>Error al crear el registro</p>";
            }else{
                $statement->execute();
                return "<p>Registro creado correctamente<p>";
            }
        }
        }
            
?>