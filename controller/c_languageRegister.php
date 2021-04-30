<?php
	include('../config/config.php');
	include ('userSession.php');

	$languageNameIn = $_POST['languageName'];
	$descriptionIn = $_POST['description'];
	$isInternationalIn = $_POST['isInternational'];

	$findLanguage = "SELECT * FROM language WHERE name = '$languageNameIn'";
	$result = $conexion->query($findLanguage);
	$count = mysqli_num_rows($result);

	if ($count > 0) {
		 echo "<br />". "El lenguaje que desea crear ya existe" . "<br />";
		 echo "<a href='../views/languageRegister.php'>Reintente nuevamente</a>";
	} else{
		if($isInternationalIn == 'SI'){
			$isInternational = 1;
		} else if ($isInternationalIn == 'NO') {
			$isInternational = 0;
		}

		$idCreator = $_SESSION['idUser'];

		$query = "INSERT INTO language(`idCreator`, `registrationDate`, `name`, `decription`, `isInternational`) 
						VALUES ('$idCreator', now(), '$languageNameIn', '$descriptionIn','$isInternational')";

		if ($conexion->query($query) === TRUE) {
			echo "<br />" . "<h2>" . "Lenguaje registrado correctamente" . "</h2>";
			echo "<h4>" . " " . $languageNameIn . "</h4>" . "\n\n";
			echo "<h5>" . "" . "<a href='../views/wordInformationRegister.php'>Puede agregar palabras al vocabulario</a>" . "</h5>";
		} else {
			echo "Error al registrar lenguaje: " . $query . "<br>" . $conexion->errno . "<br>" . $conexion->error;
		}
	}

	mysqli_close($conexion);
?>