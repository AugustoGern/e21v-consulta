<?php 
	require_once('include/paginas_restritas.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Etapa 3</title>
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
		require_once('backend/etapa2_backend.php');
		require_once('backend/etapa3_backend.php');
		//var_dump($_SESSION['resp_selec']);
		// echo "<pre>";
		// // var_dump($pesos);
		// echo "<br>";
		// // var_dump($tipo);
		// echo "<br>";
	?>

	<div class="container-fluid">
		<div class="container">
			<div class="row">		
				<h2>De acordo com as informações coletadas nas etapas anteriores, acreditamos que para o seu bem-estar você deveria marcar uma consulta com um desses profissionais:</h2>
				<!-- <hr  style="border: 0; margin-top: 30px; height: 3px; width: 700px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(34, 86, 170, 0.75), rgba(0, 0, 0, 0));"> -->
			</div>
			<?php while ($resultadoMedicos = mysqli_fetch_array($queryMedicos)) { ?>
				<hr style="background-color: rgb(168, 182, 186); width: 1000px; margin-top:50px; height: 1px; ">
			<div class="media mt-4 mb-5">
 			 	<div class="media-body pl-5">
    				<h5 class="mt-0 mb-3">Informações do médico:</h5>
    					<li>
    						<i class="fas fa-user mr-2"></i>
    					     <?=$resultadoMedicos['nome']?>
    					</li>

    					<li class="mt-2">
    						<i class="fas fa-user-md mr-2"></i>
    						<?=$resultadoMedicos['area']?>
    					</li>

    					<li class="mt-2">
    						<i class="fas fa-hospital mr-2"></i>
    						<?=$resultadoMedicos['hospital']?>
    					</li>

    					<li class="mt-2">
    						<i class="fas fa-at mr-2"></i>
    						<?=$resultadoMedicos['email']?>
    					</li>

    					<li class="mt-2">
    						<i class="fas fa-phone-alt mr-2"></i>
    						<?=$resultadoMedicos['telefone']?>
    					</li>
  				</div>
  			<img  src="media/images/mdc-20.jpg" class="img-fluid img_medico">
		</div>

	<?php } ?>
	</div>
</div>

	<!-- footer -->
	<?php require_once('include/footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>