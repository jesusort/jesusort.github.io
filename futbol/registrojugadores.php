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
      <a class="navbar-brand" href="index.html"><img src="logo-separado.png" class="img-responsive"></a>
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
	<div class="container">
		<div class="row well">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardarjugadores.php" method="POST">
					<div class="form-group">
						<label for="Nombre">Nombre:</label>
						<input type="text" name="nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for="Equipo">Equipo</label>
						<input type="text" name="equipo" class="form-control">
					</div>
					<div class="form-group">
						<label for="Telefono">Nacionalidad</label>
						<input type="text" name="nacionalidad" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Edad</label>
						<input type="number" name="edad" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Fecha de Nacimiento</label>
						<input type="date" name="fechadenacimiento" class="form-control">
					</div>					
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Registrar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>