<?php
 require_once('Process/Modelo/class.conexion.php');
 require_once('Process/Modelo/class.espe.php');
 require_once('Process/Controlador/cargarespe.php');
?>
<!DOCTYPE html>
<html>
	<title>Pedidos realizados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Logos/tyle.css">
	<link rel="stylesheet" type="text/css" href="../css/Verpedidos.css">
   <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/nav-Insertar.css">
        <link rel="stylesheet" href="../css/iconos-admin.css">
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
  <div id="TablaPedidos">
	<h1 class="titulo">Pedidos realizados</h1>
        
            <?php 
                if(isset($_GET['buscar'])){
                    buscar($_GET['buscar']);
                }else{
                    cargar();
                    valor(); 
                }
            ?>
        </div>
</div>
</body>
</html>