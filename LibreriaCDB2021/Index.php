<!DOCTYPE html>
<html>
<head>
	<title>Logeo | LCDB</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" href="img/icon.jpeg">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/navegador1.css">
<style>
	#login_form{
		width:350px;
		height:400px;
		position:relative;
		margin-bottom:20px;
		margin: auto;
		padding: auto;
	}
</style>

</head>
<body>
<header>
    <input type="Checkbox" id="btn_menu">
    <div id="icono">
        <label for="btn_menu" id="men"></label>
        <h1></h1>
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
<div class="container">
	
	<div id="login_form" class="well">
		<h2><center><span class="glyphicon glyphicon-lock"></span> Iniciar Sesión LCDB</center></h2>
		<hr>
		<form method="POST" action="login.php">
		Nombre de Usuario: <input type="text" name="username" class="form-control" required autocomplete="off">
		<div style="height: 10px;"></div>		
		Contraseña: <input type="password" name="password" class="form-control" required autocomplete="off"> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</button> <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No tienes cuenta? <a href="signup.php"> Regístrate</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
		
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
	
</div>

</body>
</html>