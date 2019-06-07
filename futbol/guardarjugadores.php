<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "futbol";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$nombre = $_POST["nombre"];
			$equipo = $_POST["equipo"];
			$nacionalidad = $_POST["nacionalidad"];
			$edad = $_POST["edad"];
			$fechadenacimiento = $_POST["fechadenacimiento"]; 

			$sql = "INSERT INTO jugadores (nombre, equipo, nacionalidad, edad, fechadenacimiento)
							VALUES ('$nombre', '$equipo', '$nacionalidad', $edad, '$fechadenacimiento')";

			if($conexion->query($sql) === TRUE){
				header("Location: consultarjugadores.php");
			} else {
				echo "Error: " .$sql. "<br>" . $conexion->error;
			}
 ?>