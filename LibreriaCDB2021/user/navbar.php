<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/logoink.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/navegador.css">
        <link rel="stylesheet" type="text/css" href="../css/chatuser.css">
        <link rel="stylesheet" href="../css/iconos-admin.css">
</head>

<header>
    <input type="Checkbox" id="btn_menu">
    <div id="icono">
        <label for="btn_menu" id="men"><span class="icon-menu"></span></label>
    </div>
    <nav class="menu" id="up">
        <ul>
          <li id="Titulo"><h1>Libreria CDB</h1></li>
            <li><span class="icon-cart"></span><a href="Indexcarrito.php">Productos</a></li>
            <li><span class="icon-user"></span><a href="index.php">Usuario</a></li>
        </ul>
    </nav>
</header>

<nav class="navbar navbar-default">
    <div class="container-fluid">

		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Sala Principal</a></li>
			<li><a href="Indexcarrito.php"><span class="icon-cart"></span> Comprar</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
                    </ul>
			</li>
		</ul>
    </div>
</nav>
