<?php
//conexion con funcion unicamente para la parte de insertar productos
    class Conexion2{
        public function get_conexion2(){
            $dbUsername = "root";
            $dbPassword = "";
            $dbHost = "localhost";
            $dbName = "prueba3";
            $conexion = new PDO ("mysql:host=$dbHost;dbname=$dbName;", $dbUsername, $dbPassword);
            return $conexion;
        }
    }

?>