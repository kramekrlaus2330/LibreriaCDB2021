<?php  
		include 'model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM products;");
		$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/indexedit.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo3.css">
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
	
	<center>
		<h3>Lista de Productos</h3>
		<table>
			<tr>
				<td>Código</td>
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Precio</td>
				<td>Existencias</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 
				foreach ($alumnos as $dato) {
					?>
					<tr>
						<td><?php echo $dato->id; ?></td>
						<td><?php echo $dato->name; ?></td>
						<td><?php echo $dato->description; ?></td>
						<td><?php echo $dato->price; ?></td>
						<td><?php echo $dato->existencias; ?></td>
						<td><a class="editar" href="editar.php?id=<?php echo $dato->id; ?>">Editar</a></td>
						<td><a class="eliminar" href="eliminar.php?id=<?php echo $dato->id; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>	
		</table>
	</center>
	<div class="regre">
    <a href="index.php">Regresar</a>
    </div>
</body>
</html>