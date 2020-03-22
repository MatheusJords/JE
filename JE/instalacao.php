<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/projetos.css">

    <title>Instalação</title>
  </head>
  <body style="background:url('img/servico6.jpg');background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-position:center;">
<?php require("header.php"); ?>
<section>
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h3>Instalação</h3>
						<p>Planejamos a instalação das estruturas com base nos projetos emitidos,
						no nosso levantamento dos dados de campo e na análise crítica da nossa experiente equipe, 
						adotando excelentes práticas de montagem. 
						Nossa experiência em obras com estruturas em PRFV proporciona maior agilidade e qualidade para a obra.</p>
						
						<p>Abaixo algumas obras realizadas por nossa equipe:</p>
						
						
				</div>
			</div>
			<div class="row">
				<div class="col-md">
				
					<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">Campo Grande RJ - Pergolado com pintura branca PU</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
										<?php
											// Contador ainda não inicializou
											$contador = 0;
											for ($contador=0; $contador < 14 ; $contador++) { ?>
												<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $contador; ?>"></li><?php
											} 
										?>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img src="img/campo_grande/img1.jpeg" style="height:500px;width:100%;">
											</div>
										<?php
											// Contador ainda não inicializou
											$contador = 2;
											for ($contador=2; $contador < 15 ; $contador++) { 
												?>
												<div class="carousel-item">
													<img src="img/campo_grande/img<?php echo $contador; ?>.jpeg" style="height:500px;width:100%;">
												</div>
												<?php 
											} 
										?>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
									
								</div>
								<div class="modal-footer">
								
								</div>
							</div>	
						</div>
					</div>
					<h6>Campo Grande RJ - Pergolado</h6>
					<img src="img/campo_grande/img12.jpeg" style="height:200px;width:200px;margin-bottom:10px;"/>
					<br>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
						Ver fotos
					</button>
				</div>



				<div class="col-md">
				<!-- Modal -->
				<div class="modal fade" id="botafogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">Escola Britânica - Botafogo</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div id="modal2" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
										<?php
											// Contador ainda não inicializou
											$contador = 0;
											for ($contador=0; $contador < 12 ; $contador++) { ?>
												<li data-target="#modal2" data-slide-to="<?php echo $contador; ?>"></li><?php
											} 
										?>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img src="img/botafogo/img1.jpeg" style="height:500px;width:100%;">
											</div>
										<?php
											// Contador ainda não inicializou
											$contador = 2;
											for ($contador=2; $contador < 12 ; $contador++) { 
												?>
												<div class="carousel-item">
													<img src="img/botafogo/img<?php echo $contador; ?>.jpeg" style="height:500px;width:100%;">
												</div>
												<?php 
											} 
										?>
									</div>
									<a class="carousel-control-prev" href="#modal2" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#modal2" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
									
								</div>
								<div class="modal-footer">
								
								</div>
							</div>	
						</div>
					</div>
					<h6>Escola Britânica - Botafogo</h6>
					<img src="img/botafogo/img2.jpeg" style="height:200px;width:200px;margin-bottom:10px;"/>
					<br>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#botafogo">
						Ver fotos
					</button>
				</div>

				<div class="col-md">
				<!-- Modal -->
				<div class="modal fade" id="fiocruz" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">Fundação Oswaldo Cruz - Piso Gradeado</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div id="modal3" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
										<?php
											// Contador ainda não inicializou
											$contador = 0;
											for ($contador=0; $contador < 12 ; $contador++) { ?>
												<li data-target="#modal3" data-slide-to="<?php echo $contador; ?>"></li><?php
											} 
										?>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img src="img/fiocruz/img1.jpeg" style="height:500px;width:100%;">
											</div>
										<?php
											// Contador ainda não inicializou
											$contador = 2;
											for ($contador=2; $contador < 12 ; $contador++) { 
												?>
												<div class="carousel-item">
													<img src="img/fiocruz/img<?php echo $contador; ?>.jpeg" style="height:500px;width:100%;">
												</div>
												<?php 
											} 
										?>
									</div>
									<a class="carousel-control-prev" href="#modal3" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#modal3" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
									
								</div>
								<div class="modal-footer">
								
								</div>
							</div>	
						</div>
					</div>
					<h6>Fundação Oswaldo Cruz - Piso Gradeado</h6>
					<img src="img/fiocruz/img12.jpeg" style="height:200px;width:200px;margin-bottom:10px;"/>
					<br>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fiocruz">
						Ver fotos
					</button>
				</div>
				<!--
				<div class="col-md">
					<img src="img/servico3.jpg" style="height:200px;width:200px;margin-bottom:30px;"/>
				</div>
				-->
			</div>
			<!--
			<div class="row">
				<div class="col-md">
					<img src="img/servico7.jpg" style="height:200px;width:200px;"/>
				</div>
				<div class="col-md">
					<img src="img/servico5.jpg" style="height:200px;width:200px;"/>
				</div>
				<div class="col-md">
					<img src="img/servico6.jpg" style="height:200px;width:200px;"/>
				</div>
			</div>
			-->
		</div>
	</section>
	<?php require("footer.php"); ?>