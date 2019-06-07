<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Futbol Total</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
</head>
<body>
	<br>
  <br>
	<!--Menú-->
<nav class="navbar navbar-default">
  
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jugadores <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="consultarjugadores.php">Consultar Jugadores</a></li>
            <li><a href="registrojugadores.php">Registrar Jugadores</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fútbol Internacional<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="LaLiga.html">La Liga</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="PremiereLeague.html">Premiere League</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="SerieA.html">Serie A</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="LigaMX.html">Liga MX</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="AscensoMX.html">Ascenso MX</a></li>
          </ul>
        </li>
      </ul>
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="logo-separado.png" class="img-responsive"></a>
      <ul class="nav navbar-nav " >
        <li><a href="https://www.instagram.com/futboltotal_mx/"><img src="instag.jpg" width="30px"></a></li>
      </ul>
      <ul class="nav navbar-nav ">
        <li><a href="https://twitter.com/mxfutboltotal"><img src="twitter.jpg" width="30px"></a></li>
      </ul>
       <ul class="nav navbar-nav ">
        <li><a href="https://www.facebook.com/futboltotalmexico"><img src="face.jpg" width="30px"></a></li>
      </ul>
     
      <form class="navbar-form navbar-right" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar en Fútbol Total">
        </div>
        <button type="submit" class="btn btn-default" >Buscar</button>
      </form>
    

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<?php 
		$server="localhost";
			$username = "root";
			$pass = "";
			$db= "futbol";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$sql = "SELECT * FROM jugadores";
			$data = $conexion->query($sql); 
			echo '<table class="table table-hover">';
			echo '<thead>';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Nombre</th>';
			echo '<th>Equipo</th>';
			echo '<th>Nacionalidad</th>';
			echo '<th>Edad</th>';
			echo '<th>Fecha de Nacimiento</th>';
			echo '<th>Editar</th>';//Opcion para editar
			echo '<th>Eliminar</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			while($obj = $data->fetch_object()){
				echo '<tr><td>'.$obj->id.'</td>';
				echo '<td>'.$obj->nombre.'</td>';
				echo '<td>'.$obj->equipo.'</td>';
				echo '<td>'.$obj->nacionalidad.'</td>';
				echo '<td>'.$obj->edad.'</td>';
				echo '<td>'.$obj->fechadenacimiento.'</td>';
				echo '<td><a class="btn btn-xs btn-primary" href="editarjugadores.php?id='.$obj->id.'">Editar</a></td>';
				echo '<td><a class="btn btn-xs btn-default" href="eliminarjugadores.php?id='.$obj->id.'">Eliminar</a></td></tr>';
			}
	 ?>
	 <script src="js/bootstrap.js"></script>
</body>
</html>
