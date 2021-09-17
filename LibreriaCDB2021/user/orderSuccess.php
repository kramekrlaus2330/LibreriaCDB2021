<?php
if(!isset($_REQUEST['id'])){
    header("Location: Indexcarrito.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ordenar</title>
    <link rel="icon" href="../img/logoink.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/nav-insertar.css">
        <link rel="stylesheet" href="../css/iconos-admin.css">
        <link rel="stylesheet" href="../css/insert2.css">
        <link rel="stylesheet" type="text/css" href="../css/nav_chat.css">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
<header> 
    <input type="Checkbox" id="btn_menu">
    <div id="icono">
        <label for="btn_menu" id="men"></label>
        <h1></h1>
    </div>
    <nav class="menu" id="up">
        <ul>
            <li id="Titulo"><h1>Libreria CDB</h1></li>
            <li><span class="icon-cart"></span><a href="Indexcarrito.php">Productos</a></li>
            <li><span class="icon-user"></span><a href="index.php">Usuario</a></li>           
        </ul>
    </nav>
</header>
<body>
<div class="container">
    <h1>Orden Completada</h1>
    <h3>Su orden se envio exitosamente.</h3>
</div>
    <div>
        <a id="tercero" href="Indexcarrito.php">Regresar</a>
    </div>
</body>
</html>