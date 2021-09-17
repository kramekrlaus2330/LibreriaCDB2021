<?php
	include('session.php');
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location=$srow['photo'];
		?>
			<script>
				window.alert('Foto actualizada en vacío');
				window.history.back();
			</script>
		<?php
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png" OR $fileInfo['extension'] == "gif" OR $fileInfo['extension'] == "jpeg") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
			
			mysqli_query($conn,"update `user` set photo='$location' where userid='".$_SESSION['id']."'");
	
			?>
				<script>
					window.alert('Foto actualizada exitosamente!');
					window.history.back();
				</script>
			<?php
		}
		else{
			?>
				<script>
					window.alert('Foto no actualizada, favor ingrese archivos perteneciente a una foto.');
					window.history.back();
				</script>
			<?php
		}
	}
	
	

?>