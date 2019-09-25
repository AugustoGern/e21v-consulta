<?php 
	require_once('include/paginas_restritas.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Histórico</title>
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/css/etapa1.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/css/medico.css">
</head>
<body class="bg-light">
	
	<!-- HEADER -->
	<?php 	
		require_once('include/header.php');
		require_once('backend/backend_historico.php');
	?>

	<div class="container-fluid">
		<div class="container mb-5 pb-5">
			<div class="row">		
				<h2>De acordo com as informações coletadas nas etapas anteriores, acreditamos que para o seu bem-estar você deveria marcar uma consulta com um desses profissionais:</h2>
			</div>

			<?php while ($resultadoMedicos = mysqli_fetch_array($queryMedicos)) { ?>
			<hr style="background-color: rgb(168, 182, 186); width: 1000px; margin-top:50px; height: 1px; ">
			<div class="media mt-4 ">
				<div class="media-body pl-5">
					<div class="ml-5">
						<h5>Informações do médico:</h5>
						<li>
							<i class="fas fa-user mt-1 mr-2"></i>
							<strong>Nome: </strong><?=$resultadoMedicos['nome']?>
						</li>

						<li class="mt-1">
							<i class="fas fa-user-md mr-2"></i>
							<strong>Especialidade: </strong><?=$resultadoMedicos['area']?>
						</li>

						<li class="mt-1">
							<i class="fas fa-hospital mr-2"></i>
							<strong>Local de Atuação: </strong><?=$resultadoMedicos['hospital']?>
						</li>

						<li class="mt-1">
							<i class="fas fa-at mr-1"></i>
							<strong>E-mail: </strong><?=$resultadoMedicos['email']?>
						</li>

						<li class="mt-1">
							<i class="fas fa-phone-alt mr-1"></i>
							<strong>Telefone: </strong><?=$resultadoMedicos['telefone']?>
						</li>
						<a href="medico.php" class="btn btn-secondary mt-3">Mais informações</a>

					</div>
				</div>
				<div class="mr-5 mt-2">
					<img  src="media/images/mdc-20.jpg" class="img-fluid img_medico_etp3 d-none d-sm-block">
				</div>
			</div>	
			<?php } ?>
		</div>
				<div class="text-center">	
					<a href="historico.php" class="btn btn-info">Voltar</a>
				</div>
	</div>

	<!-- footer -->
	<?php require_once('include/footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>