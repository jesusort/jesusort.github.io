<?php 
		$server="localhost";
		$username = "root";
		$pass = "";
		$db= "futbol";

		$conexion = new mysqli ($server, $username, $pass, $db);

		if($conexion->connect_error){
				die("Error en la conexión: " . $conexion->connect_error);
		}

		$id = $_POST["id"];
		$nombre = $_POST["nombre"];
		$equipo = $_POST["equipo"];
		$nacionalidad = $_POST["nacionalidad"];
		$edad = $_POST["edad"];
		$fechadenacimiento = $_POST["fechadenacimiento"]; 

		$sql = "UPDATE jugadores SET nombre='$nombre', equipo='$equipo', nacionalidad='$nacionalidad', edad=$edad, fechadenacimiento='$fechadenacimiento' WHERE id=$id";

		if ($conexion->query($sql) === TRUE) {
   			 header("Location: consultarjugadores.php");
		} else {
			echo "ocurrió un error";
			echo $conexion->error;
			echo $sql;
		}
		$conexion->close();
 ?>