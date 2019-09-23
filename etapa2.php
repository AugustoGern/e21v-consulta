<?php 
	require_once('include/paginas_restritas.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Etapa 2</title>
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/css/etapa1.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900,600&display=swap" rel="stylesheet">
</head>
<body class="bg-light">

	<!-- HEADER -->
	<?php 	
		require_once('include/header.php');
		require_once('backend/etapa2_backend.php');  
	?>

	<div class="container-fluid">
		<div class="container">
			<h2 class="text-center mb-5">Sobre este sintoma: <strong><?=$resultado['sintoma']?></strong>. Qual sua frequêcia e intensidade?</h2>

			<?php while ($resultResp = mysqli_fetch_array($queryResp)) { ?>
				<div class="card carddd bg-secondary divCheck <?=($_SESSION['resp_selec'][$resultado['id']]==$resultResp['id']) ? "bg-success" : '' ?>">
					<label for="radio<?=$resultResp['id']?>" class="text-center text-white p-1 label_radio" id="radio" data-id-resposta="<?=$resultResp['id']?>" data-id-sintoma="<?=$resultado['id']?>"><?=$resultResp['frequencia']?> e <?=$resultResp['nivel']?></label>
					<input type="radio" name="radio" id="radio<?=$resultResp['id']?>" class="radioB" <?=($_SESSION['resp_selec'][$resultado['id']]==$resultResp['id']) ? "checked" : '' ?>>
				</div>
			<?php } ?>

			<div class="row mb-5 mt-5">
				<div class="col-6">
					<a  class="navbar-brand card" href="<?=$urlVoltar?>" style="border-radius: 100px;">
						<i class="fas fa-angle-left nav-link text-center" 
						data-whatever="@fat">   voltar</i>
					</a>
				</div>

				<?php if ($step < $contador) { ?>
					<div class="col-6">
						<a  class="navbar-brand card p-1" href="?area=<?=$area?>&step=<?=($step+1)?>" style=" border-radius: 100px;">
							<i class="fas fa-angle-double-right nav-link text-center" 
							data-whatever="@fat">   próxima etapa</i>
						</a>
					</div>
				<?php } else { ?>
					<div class="col-6">
						<a  class="navbar-brand card p-1" href="etapa3.php?area=<?=$area?>" style=" border-radius: 100px;">
							<i class="fas fa-angle-double-right nav-link text-center" 
							data-whatever="@fat">   próxima etapa</i>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- FOOTER -->
	<?php require_once('include/footer.php'); ?>

	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="media/js/etapa2.js"></script>
</body>
</html>