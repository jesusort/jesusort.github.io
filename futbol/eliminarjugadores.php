<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "futbol";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$id=$_GET["id"];

			$sql = "DELETE FROM jugadores WHERE id=$id";
			$data = $conexion->query($sql); 

			if ($conexion->query($sql) === TRUE) {
			    header("Location: consultarjugadores.php");
			} else {
			    echo "Error deleting record: " . $conn->error;
			}
			
	 ?>
</body>
</html>