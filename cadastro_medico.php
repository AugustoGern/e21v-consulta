<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Médico</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet">
</head>
<body style="background-color: rgba(0,0,0,0.6);">

	<?php require_once('include/conexao.php') ?>
	
	<div class="container-fluid">
		<div class="container">
			<h1 class="text-center mt-3 text-white">Cadastro de Médicos</h1>
			<div class="card mt-3">
				<div class="card-body">
					<form method="post" action="" name="formCadastro">
						<label for="cod_medico">Cod. do médico:</label>
						<input type="number" name="cod_medico" id="cod_medico" placeholder="Ex: 1" disabled class="form-control"><br>

						<label for="nome_medico">Nome do médico:</label>
						<input type="text" name="nome_medico" id="nome_medico" class="form-control" placeholder="Ex: Dr. Ray"><br>

						<label for="area_atuacao">Área de atuação:</label>
						<input type="text" name="area_atuacao" id="area_atuacao" class="form-control" placeholder="Ex: Ortopedia"><br>

						<label for="hospital">Hospital:</label>
						<input type="text" name="hospital" id="hospital" class="form-control" placeholder="Ex: Hospital Sírio Líbanes"><br>

						<input type="submit" name="btnSalvar" value="Salvar" class="btn btn-success">
						<input type="submit" name="btnExcluir" value="Excluir" class="btn btn-danger">
						<a href="painel.php" class="btn btn-dark">Voltar</a>

					</form>
				</div>
			</div>
		</div>
	</div>
		

	<!-- Java Script -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>