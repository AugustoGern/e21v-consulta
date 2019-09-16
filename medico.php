<?php 
require_once('include/conexao.php');
// require_once('backend/painel_medico.php');
error_reporting(0);

	//PEGAR INFOMAÇÕES DO MEDICO
$sql = "SELECT m.*, a.area_medica AS area, h.nome AS hospital FROM tb_medicos m
JOIN tb_area_medica a ON a.id = m.fk_am
JOIN tb_hospital h ON h.id = m.fk_hospital";

$queryMedico = mysqli_query($con, $sql);

	// PEGAR AS AREAS MEDICAS CADASTRADAS
$sql = "SELECT * FROM tb_area_medica";
$queryAreas = mysqli_query($con, $sql);

	// PEGAR OS HOSPITAIS CADASTRADOS
$sql = "SELECT * FROM tb_hospital";
$queryHospital = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Médico</title>
	<link rel="stylesheet" type="text/css" href="media/css/medico.css">
	<link rel="stylesheet" type="text/css" href="media/css/media.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>

</head>
<body>

	<?php require_once('include/header.php'); ?>

	<div  class="shadow img" style="background-image: url('media/images/medico.jpg'); min-height: 330px !important; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -250px; background-repeat: no-repeat;">
		
	</div>

	<div class="container-fluid ">
		<div class="container">
			<div class="row ">
				<div class="col-lg-3 col-sm-12 mt-5 ">
					<h5>Informe o profissional desejado</h5>
					<form>
						<input class="form-control mr-sm-2 mt-2" type="search" placeholder="Digite Aqui..."	>
					</form>
					<hr>
					<h5>Especialidade</h5>
					<form>
						<select class="form-control mr-sm-2" type="select" > 
							
							<?php while($resultadoAreas = mysqli_fetch_array($queryAreas)) { ?>
								<option value="<?=$resultadoAreas['id']?>" <?= ($resultadoUsuario['fk_am']==$resultadoAreas['id']) ? 'selected' : ''?> ><?=$resultadoAreas['area_medica']?></option>
							<?php } ?>	

						</select>
					</form>
					<hr>
					<button class="btn btn-success">Pesquisar</button>
				</div>
				
				<?php while ($resultadoMedico = mysqli_fetch_array($queryMedico)) { ?>
					<div class="card col-lg-9 col-sm-12 mt-5 p-0">
						<h6 class="card-header"><strong><?=$resultadoMedico['nome']?></strong></h6>
						<div class="card-body">
							<div class="row">
								<div class="col-4">
									<img src="media/images/mdc-22.jpg" class="img-fluid img_medico">
								</div>
								<div class="col-8 p-0">
									<div>
										<i class="fas fa-user-md"></i>
										<strong>Especialidade:</strong> <?=$resultadoMedico['area']?>
										<br>
										<i class="fas fa-phone-alt"></i>
										<strong>Telefone:</strong> <?=$resultadoMedico['telefone']?>
										<br>
										<i class="fas fa-at"></i>
										<strong>E-mail:</strong> <?=$resultadoMedico['email']?>
										<br>
										<i class="fas fa-hospital"></i>
										<strong>Local de Atuação:</strong> <?=$resultadoMedico['hospital']?>
										<p class="mt-2">
											<button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
												Mais informações
											</button>
										</p>
										<div class="collapse" id="collapseExample">
											<div class="card card-body">
												<strong>Formação:</strong>
												<li>Especialização: Ortopedia e Traumatologia. 2002</li>
												<li>ATLS. American College of Surgeons. 2006</li>
												<li>Médico Assistente, atuando na área de Ortopedia. 2007/-2016</li>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>		
	</div>






	<?php require_once('include/footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>