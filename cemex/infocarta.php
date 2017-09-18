<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Comedor CEMEX</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.2/css/bulma.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="columns">
			<div class="column">
				<img src="assets/img/logo.png" alt=""><h1>Servicio de comedor</h1>
			</div>
			<div class="column">
				<div class="box">
					<article class="media">
						<div class="media-left">
								<img src="assets/img/empleado.jpg" alt="Image">
						</div>
								<div class="media-content">
									<div class="content">
										<p>
											<strong>Juan Pérez</strong>
											<br>
											<strong>Número de empleado:&nbsp;04502</strong>
										</p>
									</div>
								</div>
					</article>
				</div>
			</div>
		</div>		


		<section class="hero is-medium">
			<div class="">		
				<div class="columns">
					<div class="column">
						<span class="has-text-centered">
							<h1 class="title is-2">MENU DE CARTA</h1>
						</span>
						<span class="has-text-centered">
							<p class="title is-4">
								<?php
									switch ($_GET["comida"]) {
										case 'comida1':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 1<br>Costo: $52";
											break;
										case 'comida2':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 2<br>Costo: $48";
											break;
											
										case 'comida3':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 3<br>Costo: $55";
											break;
											
										case 'comida4':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 4<br>Costo: $63";
											break;
											
										case 'comida5':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 5<br>Costo: $45";
											break;
											
										case 'comida6':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 6<br>Costo: $53";
											break;
											
										case 'comida7':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 7<br>Costo: $44";
											break;
											
										case 'comida8':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 8<br>Costo: $43";
											break;
											
										case 'comida9':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 9<br>Costo: $34";
											break;
											
										case 'comida10':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 10<br>Costo: $58";
											break;
											
										case 'comida11':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 11<br>Costo: $52";
											break;
											
										case 'comida12':
											echo "<img src='assets/img/comida01.jpg'><br>Comida 12<br>Costo: $46";
											break;
									}
								?>
							</p>
						</span>
						<span class="has-text-centered">
							<h2 class="title is-3">Su número de orden es: 0072</h1>
						</span>
						<p class="notification is-info has-text-centered title">
							Imprima, tome su recibo y espere su turno para entregarle su comida
						</p>
					</div>

					<div class="column is-1">&nbsp;</div>

					<div class="column">
						<a href="index.html">
							<p class="has-text-centered">
								<img src="assets/img/imprimir.png" alt=""><br/>
								<span class="title"><strong>TOQUE PARA IMPRIMIR SU RECIBO</strong></span>
							</p>
						</a>
					</div>
				</div>		

				
			</div>
		</section>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>