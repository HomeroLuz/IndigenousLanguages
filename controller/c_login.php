<!--
	@Autor: Homero Luz
-->
<?php
	session_start();
?>

<?php
	include("../config/config.php");

	//obtenemos los valores del formulario
	$userNameIn = $_POST['userName'];
	$passwordIn = $_POST['pass'];

	$sql = "
		SELECT 
			idUser, 
		    userName, 
		    name, 
		    email, 
		    phoneNumber, 
		    password, 
		    registrationDate, 
		    type 
		FROM 
			user 
		WHERE 
			userName = '$userNameIn'
		OR
			email = '$userNameIn'";

	$result = $conexion->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if (password_verify($passwordIn, $row['password'])) {
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['start'] = time();
			$_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
			$_SESSION['type'] = $row['type'];
			$_SESSION['idUser'] = $row['idUser'];
			header("Status: 301 Moved Permanently");
			if ($row['type'] == 0 || $row['type'] == 1) {
				header("Location: ../views/wordInformationRegister.php");	
				exit;
			} else {
				header("Location: ../views/userHome.php");
				exit;
			}
			
		} else {
			echo "Contraseña incorrecta";
			echo "<br><a href='../views/login.php'>Volver a Intentarlo</a>";	
		}
	} else {
		echo "El usuario no existe";
		echo "<br><a href='../views/login.php'>Volver a Intentarlo</a>";
	}
	mysqli_close($conexion); 
?>