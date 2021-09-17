<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'prueba3';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
class Conexion{

    function get_conexion1(){
        $user = "root";
        $pass = "";
        $host = "localhost";
        $db = "prueba3";
        $conexion = new PDO("mysql:host=$host;dbname=$db;", $user , $pass);
        return $conexion;
    }
    
}
?>