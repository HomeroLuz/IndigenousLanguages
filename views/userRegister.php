<!--
	@Autor: Homero Luz
-->
<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="../css/bootstrap.css"> 
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<?php
		include('menuAnonymous.php');
	?>	
	<form id="userRegisterForm" action="../controller/c_userRegister.php" method="POST">
		<!-- DATOS PERSONALES -->
		<label><h3>&ensp;DATOS PERSONALES</h3></label><br/>
		<div class="form-group">
			<label for="personalName">&emsp;Nombre</label>
			<input type="text" class="form-control" id="personalName" name="personalName" placeholder="Gonzalo Perez Mendoza" required="true">
		</div>
		
		<div class="form-group">
			<label for="emailAddress">&emsp;Correo electrónico</label>
			<input type="email" class="form-control" id="emailAddress" name="emailAddress" aria-describedby="emailHelp" placeholder="ejemplo@servidor.com" required="true">
		</div>

		<div class="form-group">
			<label for="emailAddress">&emsp;Teléfono</label>
			<input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="5523872100">
		</div>

		<!-- DATOS DE USUARIO -->
		<div class="divider"/>
		<label><h3>&ensp;DATOS DE USUARIO</h3></label><br/>
		<div class="form-group">
			<label for="userName">&emsp;Nombre de usuario</label>
			<input type="text" class="form-control" id="userName" name="userName" placeholder="gopm12" required="true">
			<small id="msgHelp" class="form-text text-muted">&emsp;Puede formar su nombre de usuario con las 2 letras de su nombre, la primera inicial de cada apellido y un número de dos dígitos</small>
		</div>
		<div class="form-group">
			<label for="inputPassword">&emsp;Contraseña</label>
			<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required="true">
		</div>
		<div class="form-group">
			<label for="inputPassword">&emsp;Confirmar Contraseña</label>
			<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required="true">
		</div>
		<div class="contentCenter">
			<button type="submit" class="btn btn-primary">Registrarse</button>
		</div>
	</form>
	<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
	<script src="../js/vendor/bootstrap.js"></script>
	<script src="../js/main.js"></script>
	<?php
		include('footer.php');
	?>
</body>
</html>