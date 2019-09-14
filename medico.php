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

	<div style="background-image: url('media/images/medico.jpg'); min-height: 330px !important; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -250px; background-repeat: no-repeat;" class="shadow img">
		
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
							<option value="0">--</option>
							<option value="1">Neurologista</option>
							<option value="2">Ortopedista</option>
							<option value="3">Fisioterapeuta</option>
							<option value="4">Cardiologista</option>
							<option value="5">Otorrinolaringologista</option>
							<option value="6">Pneumologista</option>
							<option value="7">Urologista</option>
							<option value="8">Angiologista</option>
						</select>
					</form>
					<hr>
				</div>
				<div class="card col-lg-9 col-sm-12 mt-5 p-0">
					<h6 class="card-header"><strong>Dr.Sergio Mouro</strong></h6>
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								<img src="media/images/mdc-22.jpg" class="img-fluid img_medico">
							</div>
							<div class="col-8 p-0">
								<div>
									<i class="fas fa-user-md"></i>
									<strong>Especialidade:</strong> Ortopedista
									<br>
									<i class="fas fa-phone-alt"></i>
									<strong>Telefone:</strong> (47) 994514478
									<br>
									<i class="fas fa-at"></i>
									<strong>E-mail:</strong> mourão_26K8@outlook.com
									<br>
									<i class="fas fa-hospital"></i>
									<strong>Local de Atuação:</strong> Hospital Santa Isabel
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
			</div>
		</div>		
	</div>






	<?php require_once('include/footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>