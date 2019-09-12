<?php require_once('etapa1_backend.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Etapa 1</title>
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/css/etapa1.css">
</head>
<body>
	<!-- Inclusão do HEADER -->
	<?php require_once('include/header.php');?>

	<div class="container-fluid">
		<div class="container">
			
		
		
	
	<h2 class="text-center">Quais desses sintomas vôce esta sentindo no seu corpo?</h2>

		<?php while($resultadoSintomas = mysqli_fetch_array($querySintomas)) { ?>
			<div class="card bg-secondary mt-5 divCheck">
				<label for="check" class="text-center text-white" id="check"><?=$resultadoSintomas['sintoma']?></label>
				<input type="checkbox" name="check" id="check" class="check">
			</div>
		<?php } ?>
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