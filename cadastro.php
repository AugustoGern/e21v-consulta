<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuarios</title>
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body >

	<!-- ==============================================NAVBAR==================================================== -->
	<nav class="navbar  navbar-expand-lg navbar-light mb-3" style="background-color: rgb(10,68,161,0.90);">
		<a class="navbar-brand" href="#">
			<img src="media/images/logo.png" style="width: 40px;  ">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse  navbar-collapse " id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link text-white" href="index.php">Início <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="sobre.php">Sobre</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#">Consultar</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a class="navbar-brand text-light " href="cadastro.php">
					<i class="fas fa-user-plus nav-link ml-2" 
					></i>
				</a>
			</form>
		</div>
	</nav>

	<!-- =========================================================================== -->
	<div style="background-image: url('media/images/mdc-18.jpg'); min-height: 330px; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -118px; background-repeat: no-repeat;" class="shadow">
		<div class="text-center my-5">
			
		</div> 
	</div>





	<!-- CONTEÚDO DA PÁGINA -->

	<div class="container-fluid">
		<div class="container" style="margin-top: -200px;">
			<h1 class="text-center pt-3 ">Cadastro</h1>
			<div class="card mt-3 mb-3" >
				<div class="card-body">
					<form method="post" action="" name="formCadastro">
						<label for="nome">Nome Completo:<strong class="text-danger"> *</strong></label>
						<input type="text" name="nome" id="nome" placeholder="Gabriel de Souza" class="form-control"><br>

						<label for="email">Email:<strong class="text-danger"> *</strong></label>
						<input type="email" name="email" id="email" class="form-control"><br>

						<label for="dataNasc">Data de Nascimento: <strong class="text-danger"> *</strong></label>
						<input type="date" name="dataNasc" id="dataNasc" class="form-control"><br>

						<label for="sexo">Sexo: <strong class="text-danger"> *</strong></label>
						<select class="form-control">
							<option>Masculino</option>
							<option>Feminino</option>
						</select><br>

						<label for="senha">Senha: <strong class="text-danger"> *</strong></label>
						<input type="password" name="senha" id="senha" class="form-control"><br>

						<label for="confSenha">Confirmar Senha: <strong class="text-danger"> *</strong></label>
						<input type="password" name="confSenha" id="confSenha" class="form-control"><br>

						<input type="submit" name="cadastro" id="cadastro" class="btn btn-primary form-control" value="Cadastre-se">
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER -->
	<?php require_once('include/footer.php'); ?>


	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>