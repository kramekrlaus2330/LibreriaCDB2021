<?php
    class Espe{
        /* Ingresar form/SOLICITUD  ESTO TODAVIA NO ESTA HECHO*/ 
        public function insertarForm($arg_nombre, $arg_form){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "INSERT INTO prestar (Nombre, Form) VALUES(:Nombre, :Form)";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(":Nombre", $arg_nombre);
            $stmt->bindParam(":Form", $arg_form);
            if(!$stmt){
                return "Error al ingresar el formulario";
            }else{
                $stmt->execute();
                return "Formulario ingresado exitosamente";
            }
        }

        public function cargarForms(){
            $rows = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "select * from orders";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            while ($result = $stmt->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }

        public function buscarForms($arg_created){
            $rows = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $created = "%".$arg_created."%";
            $sql = "select * from orders where user like :username";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(":username", $created);
            $stmt->execute();
            while ($result = $stmt->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }

        public function Valor(){
        $conn=mysqli_connect('localhost','root','','prueba3' );
        $query="SELECT SUM(qty) AS 'sum' FROM orders ";
        $res=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($res);
        return $row;
            }


        }
        


?>