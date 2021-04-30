<!--
	@Autor: Homero Luz
-->
<?php
    include('../controller/userSession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Registro de lenguaje</title>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="../css/bootstrap.css"> 
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<?php
		include('menu.php');
	?>	
	<form id="userRegisterForm" action="../controller/c_languageRegister.php" method="POST">
		<label><h3>&ensp;REGISTRANDO NUEVO LENGUAJE</h3></label><br/>
		<div class="form-group">
			<label for="languageName">&emsp;Nombre</label>
			<input type="text" class="form-control" id="languageName" name="languageName" placeholder="Náhuatl" required="true">
		</div>
		
		<div class="form-group">
            <label for="description">&emsp;Descripción:</label>
            <textarea class="form-control" rows="5" name="description" id="description" required="true"></textarea>
            <small id="observationsHelp" class="form-text text-muted">&emsp;IMPORTANTE en caso de Citología indique tipo(Impronta, PAF, Raspado o H isopado). Especifique: tiempo de aparación, localización, tamaño, apariencia, tipo de tinción requerido.<br/>&emsp;Para EGO: Indique método de obtencion(Micción espontanea, Sondeo, Citocentésis, etc)</small>
        </div>

		<div class="form-group">
			<label for="isInternational">&emsp;Es internacional:</label>
			<select class="form-control" id="isInternational" name="isInternational">
				<option>NO</option>
				<option>SI</option>
			</select>
		</div>

		<div class="contentCenter">
			<button type="submit" class="btn btn-primary">Guardar</button>
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