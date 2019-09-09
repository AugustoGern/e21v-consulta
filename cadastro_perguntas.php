<?php 
	require_once('include/conexao.php');
	require_once('backend/painel_perguntas.php');
	error_reporting(0);

	// PEGAR OS SINTOMAS
	$sql = "SELECT * FROM tb_sintomas";
	$querySintomas = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Pergunta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="media/images/4232logo__.ico">
</head>
<body style="background-color: rgba(0,0,0,0.6);">

	<?php require_once('include/conexao.php') ?>
	
	<div class="container-fluid">
		<div class="container">
			<h1 class="text-center mt-3 text-white">Cadastro de Perguntas</h1>
			<div class="card mt-3">
				<div class="card-body">
					<form method="post" action="" name="formCadastro">
						<label for="cod_pergunta">Cod. da Pergunta:</label>
						<input type="number" name="cod_pergunta" id="cod_pergunta" placeholder="Ex: 1" disabled class="form-control" value="<?=$resultadoUsuario['id']?>"><br>

						<label for="pergunta">Pergunta:</label>
						<input type="text" name="pergunta" id="pergunta" class="form-control" placeholder="Ex: Qual a intensidade da dor?" value="<?=$resultadoUsuario['pergunta']?>"><br>

						<label for="sintoma">Sintoma Relacionado</label>
						<select name="sintoma" id="sintoma" class="custom-select mb-4">
							<?php while($resultadoSintomas = mysqli_fetch_array($querySintomas)) { ?>
								<option value="<?=$resultadoSintomas['id']?>" <?= ($resultadoUsuario['fk_sin']==$resultadoSintomas['id']) ? 'selected' : ''?> ><?=$resultadoSintomas['sintoma']?></option>
							<?php } ?>
						</select>

						<input type="submit" name="btnSalvar" value="Salvar" class="btn btn-success">
						<input type="submit" name="btnExcluir" value="Excluir" class="btn btn-danger">
						<a href="perguntas_painel.php" class="btn btn-dark">Voltar</a>

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