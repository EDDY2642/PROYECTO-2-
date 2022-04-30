<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/estiloss.css">
		
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<title>CineItiz</title>
	</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">CineItiz</h2>
			<nav>
				<a href="cliente.php" class="activo">Inicio</a>
				<a href="quienes1.php">Quiénes somos</a>
				<a href="ubicacion1.php">Ubicanos</a>
				<a href="sanidad1.php">Medidas de Sanidad</a>
				<a href="login.php">Cerrar Sesión</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Las mejores películas a un click...</h3>
				
				
			</div>
		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Estrenos</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="sp.php"><img src="img/spider1.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="a.php"><img src="img/a.jpeg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="moon.php"><img src="img/moon.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="squ.php"><img src="img/squ.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="venom.php"><img src="img/venom.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="007.php"><img src="img/007.jpg" alt=""></a>
						</div>
						

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
	</main>


	<br>


	<div class="peliculas-recomendadas contenedor">
		<div class="contenedor-titulo-controles">
			<h3>Proximos Estrenos</h3>
			<div class="indicadores"></div>
		</div>

		<div class="contenedor-principal">
			<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

			<div class="contenedor-carousel">
				<div class="carousel">
					<div class="pelicula">
						<a href="alien.php"><img src="img/aliens.jpg" alt=""></a>
					</div>
					<div class="pelicula">
						<a href="amor.php"><img src="img/amor.jpg" alt=""></a>
					</div>
					<div class="pelicula">
						<a href="bat.php"><img src="img/bat.jpg" alt=""></a>
					</div>
					<div class="pelicula">
						<a href="Rocky.php"><img src="img/rocky.jpg" alt=""></a>
					</div>
					<div class="pelicula">
						<a href="loki.php"><img src="img/loki.jpg" alt=""></a>
					</div>
					<div class="pelicula">
						<a href="00"><img src="img/" alt=""></a>
					</div>
					
				</div>
			</div>

			<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
		</div>
	</div>
</main>



<br>


	<div class="peliculas-recomendadas contenedor">
		<div class="contenedor-titulo-controles">
			<h3>Esclusivas</h3>
			<div class="indicadores"></div>
		</div>

		<div class="contenedor-principal">
			<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

			<div class="contenedor-carousel">
				<div class="carousel">
					<div class="pelicula">
						<a href="pro.php"><img src="img/pro.png" alt=""></a>
					</div>
					<div class="pelicula">
						<a href="crue.php"><img src="img/cruella.jpg" alt=""></a>
					</div>
					<div class="pelicula">
						<a href="bla.php"><img src="img/bla.jpg" alt=""></a>
					</div>
					<div class="pelicula">
						<a href="jok.php"><img src="img/jok.jpg" alt=""></a>
					</div>
					<div class="pelicula">
						<a href="per.php"><img src="img/per.jpg" alt=""></a>
					</div>
					
					
				</div>
			</div>

			<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
		</div>
	</div>
</main>

	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="main.js"></script>
</body>
</html>