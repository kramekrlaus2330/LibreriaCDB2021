<!DOCTYPE html>
<html>
<head>
	<title>Logeo | LCDB</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" href="img/logoink.png">
		<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/navegador.css">
		<link rel="stylesheet" href="css/nav_chat.css">
<style>
	#signup_form{
		width:350px;
		height:530px;
		position:relative;
		margin-bottom:20px;
		margin: auto;
		padding: auto;
	}
</style>
</head>
<header>
    <input type="Checkbox" id="btn_menu">
    <div id="icono">
        <label for="btn_menu" id="men"><span class="icon-menu"></span></label>
    </div>
    <nav class="menu" id="up">
        <ul>
          <li id="Titulo"><h1>Libreria CDB</h1></li>
          <li><span class="icon-cart"></span><a href="index.php">Productos</a></li>
          <li><span class="icon-user"></span><a href="index.php">Usuario</a></li>
        </ul>
    </nav>
</header>
<br>
<body>
<div class="container" height= "600px">
	<div id="signup_form" class="well">
		<h2><center><span class="glyphicon glyphicon-user"></span> Regístrate con LCDB</center></h2>
		<hr>
		<form method="POST" action="register.php">
		Nombre Completo: <input type="text" name="name" class="form-control" autocomplete="off" required>
		<div style="height: 0px;"></div>
		Nombre de Usuario: <input type="text" name="username" class="form-control" autocomplete="off" required>
		<div style="height: 0px;"></div>		
		Contraseña: <input type="password" name="password" class="form-control" autocomplete="off" required> 
		<div style="height: 0px;"></div>
		Telefono: <input type="text" name="cell" class="form-control" autocomplete="off" required>
		<div style="height: 0px;"></div>
		Correo: <input type="text" name="correo" class="form-control" autocomplete="off" required>
		<div style="height: 20px;"></div>
		
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Registrarse</button> <a href="index.php"> Regresar a Iniciar Sesión</a>
		</form>
		<div style="height: 45px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['sign_msg'])){
					echo $_SESSION['sign_msg'];
					unset($_SESSION['sign_msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>