<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina inicial </title>
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/index.css">
	<link rel="stylesheet" type="text/css" href="media/css/cadastro.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet">
</head>
<body>
	
	<!-- Inclusão do HEADER -->
	<?php require_once('include/header.php'); ?>

	<div style="background-image: url('media/images/fnd-index.jpg'); min-height: 330px; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -118px; background-repeat: no-repeat;" class="shadow">
		<div class="text-center my-5">
			<h1 style="color: #2256aa; font-family: 'Montserrat', sans-serif; font-weight: 900;">Otimize sua vida!</h1>
		</div> 
	</div>

	<!-- botão -->
	<?php if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) { ?>
	<div class="text-center ">
		<a href="consulta.php" class="btn btn-success text-center " style="margin-top: -125px;"> Realize sua consulta </a>
	</div>
	<?php } else { ?>
	<div class="text-center ">
		<a  class=" btn text-center text-white " style="margin-top: -125px;">Faça seu login ou cadastre-se</a>
	</div>
	<?php } ?>
	<!-- =========== -->


	<!-- =================================================COMO FUNCIONA=================================================== -->
	<div class="container-fluid">
		<div class="container">

			<h1 class="text-center pt-5">É fácil e simples de Consultar!</h1>
			<h2 class="text-center">Como funciona?!</h2>

			<div class="card mb-5" style="background-image: linear-gradient( white, rgb(100, 155, 200)); border:transparent;">
				<div class="card-body">

					<div class="row col-12 col-md">
						<h5 class="pl-5 d-none d-md-block">1</h5>
						<div class="col-12 col-md">
							<li class="pt-5 pl-4">Faça seu login ou cadastro, é fácil e rápido</li><br>
						</div>
					</div>

					<div class="row col-12 col-md">
						<li  class="pt-5 col-md-10">Ao clicar em <a href="#">Realize sua consulta</a> você poderá identificar o local onde você sente seu desconforto.</li>
						<div class="col-12 col-md">
							<h5 class=" d-none d-md-block">2</h5><br>
						</div>
					</div>

					<div class="row col-12 col-md">
						<h5 class="pl-5 d-none d-md-block" >3</h5>	
						<div class="col-12 col-md">
							<li  class="pt-5 col-md-11">Após identificar seu desconforto, irá ser apresentado uma série de perguntas com possíveis sintomas, e você deverá selecionar o sintoma que mais se identifica de acordo com o seu desconforto.</li> <br>
						</div>
					</div>

					<div class="row col-12 col-md">
						<li  class="pt-5 col-md-10"> Assim que finalizar sua "consulta" iremos fornecer como resposta o profissional mais adequado para o seu possível problema.</li>
						<div class="col-12 col-md">
							<h5 class=" d-none d-md-block">4</h5><br>
						</div>
					</div>

					<div class="row col-12 col-md">
						<h5 class="pl-5 d-none d-md-block " >5</h5>	
						<div class="col-12 col-md">
							<li  class="pt-5 col-md-11">Finalizando sua consulta, forneceremos também um relatório e histórico de suas pesquisas até o momento.</li> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 

	<!-- =========================================FOOTER============================== -->

	<?php require_once('include/footer.php'); ?>


	<!-- =========================================SCRIPT============================== -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="media/js/cadastro.js"></script>
</body>
</html>

