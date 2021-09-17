<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: index15.php');
	}
		include 'model/conexion.php';
		$id = $_GET['id'];
		$sentencia = $bd->prepare("SELECT * FROM products WHERE id = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/edit.css">
</head>
<body>
	<br>
<div class="row">
    <div class="col-md-12">
      <form method="POST" action="editarProceso.php">
        <h1> Editar Producto. </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Informacion del producto:</legend>
        
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="txt2name" value="<?php echo $persona->name; ?>">
        
          <label for="descripcion">Descripción :</label>
          <input type="text" id="descripcion" name="txt2desc" value="<?php echo $persona->description; ?>">
       
          <label for="precio">Precio :</label>
          <input type="text" id="precio"  name="txt2price" value="<?php echo $persona->price; ?>" >
		  
		  <label for="existencias">Existencias :</label>
          <input type="text" id="existencias"  name="txt2exis" value="<?php echo $persona->existencias; ?>">
		  
		  <input type="hidden" name="id2" value="<?php echo $persona->id; ?>">
          
        </fieldset>
       
        <button type="submit" value="Editar Producto">Editar</button>
        
       </form>
        </div>
      </div>
</body>
</html>