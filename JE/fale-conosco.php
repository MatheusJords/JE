<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/projetos.css">
	<link rel="stylesheet" href="css/fale-conosco.css">

    <title>Fale-Conosco</title>
  </head>
  <body style="background-color:snow;">
<?php require("header.php"); ?>
<section style="margin-bottom:150px;">
		<div class="container">
			<div class="row">
				<div class="col-md" style="text-align:center; margin-top:80px;">
					<img src="img/servico5.jpg" style="height:320px;width:75%;"/>
					<hr>
				</div>
			</div>
			<div class="row formulario">
				<div class="col-md">
					<form style="margin-bottom" action="mail_send.php" method="post">
					  <div class="form-row">
						<div class="form-group col-md">
						  <input type="name" class="form-control" id="inputNome1" placeholder="Nome*" style="margin-bottom:8px;">
						  <input type="email" class="form-control" id="inputEmail1" placeholder="Email*" style="margin-bottom:8px;" name="email">
						  <input type="text" class="form-control" id="inputText1" placeholder="Assunto" style="margin-bottom:8px;">
							<textarea class="form-control" rows="5" id="comment"  name="mensagem">
							</textarea>
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</section>
		<div class="container">
			<div class="col-md rodape">
				<h4>JE Montagem e Instalações</h4>
				<p>jeprestacoesdeservicos@gmail.com</p>
			</div>
		</div>
	
	
	<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>