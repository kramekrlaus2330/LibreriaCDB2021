<div class="col-lg-12">
    <div class="panel panel-default" style="height:50px;">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span class="glyphicon glyphicon-user"></span> Lista de Usuarios</strong></span>
		<div class="pull-right" style="margin-right:10px; margin-top:7px;">
			<a href="#add_user" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Añadir</a>
		</div>
	</div>
	<table width="100%" class="table table-striped table-bordered table-hover" id="userList">
        <thead>
            <tr>
                <th>Nombre</th>
				<th>Nombre de Usuario</th>
				<th>Contraseña</th>
				<th>Telefono</th>
				<th>Acceso</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$query=mysqli_query($conn,"select * from `user` order by uname asc");
			while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><input type="hidden" id="ename<?php echo $row['userid']; ?>" value="<?php echo $row['uname']; ?>"><?php echo $row['uname']; ?></td>
				<td><input type="hidden" id="eusername<?php echo $row['userid']; ?>" value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></td>
				<td><input type="hidden" id="epassword<?php echo $row['userid']; ?>" value="<?php echo $row['password']; ?>"><?php echo $row['password']; ?></td>
				<td><input type="hidden" id="epassword<?php echo $row['userid']; ?>" value="<?php echo $row['cell']; ?>"><?php echo $row['cell']; ?></td>
				
				<td>
					<?php 
						if ($row['access']==1){
							echo "Administrador";
						}
						else{
							echo "Usuario";
						}
					?>
				</td>
				<td> 
					<button type="button" class="btn btn-warning edituser" value="<?php echo $row['userid']; ?>"><span class="glyphicon glyphicon-pencil"></span> Editar</button> || 
					<button type="button" class="btn btn-danger deleteuser" value="<?php echo $row['userid']; ?>"><span class="glyphicon glyphicon-trash"></span> Eliminar</button>
				</td>
			</tr>
			<?php
			}
		?>
        </tbody>
    </table>                     
</div>