<?php
include '../MODELO/Conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Catálogo</title>
     <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
<h1 class="tituloP">Productos</h1>
<div class="container">    
    <!-- <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>-->
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4"> 
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row['name']; ?></h4>
                    <div class="col-md-6">
                        <img id="img" src="data:image/png;base64,<?php echo base64_encode($row['img']);?>">
                    </div>
                    <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                    <p class="list-group-item-text">Existencias: <?php echo $row["existencias"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-7">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>