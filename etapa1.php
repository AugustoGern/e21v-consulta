<?php require_once('backend/etapa1_backend.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Etapa 1</title>
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/css/etapa1.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900,600&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
	<!-- Inclusão do HEADER -->
	<?php require_once('include/header.php');?>

	<div class="container-fluid">
		<div class="container">
			<h2 class="text-center mb-5">Quais destes sintomas você esta sentindo no seu corpo?</h2>

			<?php while($resultadoSintomas = mysqli_fetch_array($querySintomas)) { ?>
			<div class="card cardd bg-secondary divCheck">
				<label for="check" class="text-center text-white" id="check"><?=$resultadoSintomas['sintoma']?></label>
				<input type="checkbox" name="check" id="check" class="check">

			</div>
			<?php } ?>
			<div class="row mb-5 mt-5">
				<div class="col-4">
				<a  class="navbar-brand card" href="consulta.php" style=" border-radius: 100px;">
					<i class="fas fa-angle-left nav-link text-center" 
					data-whatever="@fat">   voltar</i>
				</a>
				</div>

				<div class="col-4">
				<a class="navbar-brand card p-1" href="?area=<?=$area?>&step=<?=($step+1)?>" style=" border-radius: 100px;">
					<i class="fas fa-angle-right nav-link text-center" 
					data-whatever="@fat">   mais opções</i>
				</a>
				</div>

			
				<div class="col-4">
				<a  class="navbar-brand card p-1" href="#" style=" border-radius: 100px;">
					<i class="fas fa-angle-double-right nav-link text-center" 
					data-whatever="@fat">   próxima etapa</i>
				</a>
			</div>
				
			</div>
		</div>
	</div>


	<!-- footer -->
	<?php require_once('include/footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="media/js/etapa1.js"></script>
</body>
</html>


