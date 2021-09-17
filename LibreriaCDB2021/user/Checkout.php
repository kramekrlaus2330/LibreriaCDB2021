<?php
// include database configuration file
include '../MODELO/Conexion.php';

// initializ shopping cart class
include '../MODELO/Cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: Indexcarrito.php");
}

// set customer ID in session
// $_SESSION['userid'] = 1;

// get customer details by session customer ID
// session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Realizar Pedido</title>
    <link rel="icon" href="../img/logoink.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/viewCart.css">
        <link rel="stylesheet" href="../css/iconos-admin.css">
    <style>
    .container{width: 100%;padding: 50px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
=
<body>
<div class="container">
    <h1>Vista Previa del Pedido</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Candidad</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay productos en tu carrito...</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table> 
    <div class="footBtn">
        <a href="Indexcarrito.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continuar Comprando</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Realizar Pedido <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
</body>
</html>