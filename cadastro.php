<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuarios</title>
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/index.css">
</head>
<body class="bg-dark">

	<!-- Inclusão do HEADER -->
	<?php require_once('include/header.php'); ?>

	<!-- CONTEÚDO DA PÁGINA -->

	<div class="container-fluid bg-dark">
		<div class="container">
			<h1 class="text-center pt-3 text-white">Cadastro</h1>
			<div class="card mt-3">
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

	<div class="footer p-0 m-0 mt-3" style="background-color: rgb(10,68,161,0.90);">
		<div class="row col-sm" style="text-align: center;">
			<div class="container">	
				<p class=" text-light col-sm text-center pr-0"><strong class="text-success">NomeLogo </strong>© 2019</p>
				
				<p class="text-light "><i>Uma empresa Brasileira com muito orgulho.</i></p>
			</div>
		</div>
	</div>



	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>