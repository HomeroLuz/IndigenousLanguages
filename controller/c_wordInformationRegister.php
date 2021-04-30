<?php
	include("../config/config.php");
	include("userSession.php");

	$idLanguageSelectIn = $_POST['languageSelect'];
	$vocabularyWordIn = $_POST['vocabularyWord'];
	$wordAbbreviationIn = $_POST['wordAbbreviation'];
	$meaningSpanishIn = $_POST['meaningSpanish'];
	$usageExampleIn = $_POST['usageExample'];

	$findWord = "SELECT * FROM wordinformation WHERE vocabularyWord = '$vocabularyWordIn'";
	$result = $conexion->query($findWord);
	$count = mysqli_num_rows($result);

	if ($count > 0) {
		 echo "<br />". "La palabra que desea crear ya existe" . "<br />";
		 echo "<a href='../views/wordInformationRegister.php'>Reintente nuevamente</a>";
	} else{
		$idCreator = $_SESSION['idUser'];

		$query = "INSERT INTO `wordinformation`(`idLanguage`, `idCreator`, `registrationDate`, `vocabularyWord`, `wordAbbreviation`, `meaningSpanish`, `usageExample`)
							VALUES ('$idLanguageSelectIn', '$idCreator', now(), '$vocabularyWordIn', '$wordAbbreviationIn', '$meaningSpanishIn', '$usageExampleIn')";
		if ($conexion->query($query) === TRUE) {
			echo "<div class='contentCenter' <br />" . "<h2>" . "Palabra agregada exitosamente!" . "</h2>";
			echo "<h5>" . " " . "<a href='../views/wordInformationRegister.php'>Volver</a>" . "</h5></div>";
		} else {
			echo "Error al registrar la nueva palabra: " . $query . "<br>" . $conexion->errno . "<br>" . $conexion->error;
		}
	}
	mysqli_close($conexion);
?>