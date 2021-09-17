<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$username=check_input($_POST['username']);
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
			$_SESSION['sign_msg'] = "El nombre de usuario no debería contener espacios ni caracteres especiales!"; 
			header('location: signup.php');
		}
		$correo=check_input($_POST['correo']);

		$codigo = check_input($_POST['cell']);
		$codigo_check = preg_match("/^[0-9_]*$/", $codigo);//x 
		if(!$codigo_check){
			$_SESSION['sign_msg'] = "El telefono cumple con los requisitos necesarios."; 
			header('location: signup.php');
		}

		if($row['username'] < 1){
				$fusername=$username;
				$fcorreo = $correo;
				$fcodigo = $codigo;
				$password = check_input($_POST["password"]);
				$fpassword=md5($password);
				$fname = check_input($_POST["name"]);

				$query = mysqli_query($conn,"INSERT INTO `user` (uname, username, password, access, cell, correo) values ('$fname', '$fusername', '$fpassword', '2','$fcodigo','$fcorreo')");
				$_SESSION['msg'] = "Registro hecho exitosamente, ahora puedes Iniciar Sesión!"; 
				header('location: index.php');
			}else{
				$_SESSION['sign_msg'] = "Nombre de usuario ya existe, favor ingrese otro."; 
				header('location: signup.php');	
			}
		}
	
?>