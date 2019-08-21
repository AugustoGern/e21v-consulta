<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>histórico</title>
	<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/index.css">
</head>
<body >
	<?php require_once('include/header.php'); ?>

	

	<!-- =========================================================================== -->
	<div style="background-image: url('media/images/mdc-18.jpg'); min-height: 360px; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -118px; background-repeat: no-repeat;" class="shadow">
		<div class="text-center my-5">
			
		</div> 
	</div>
	<!-- ==============================================CONTEUDO==================================================== -->

	<div class="container-fluid">
		<div class="container"  style="font-family: 'Montserrat', sans-serif; margin-top: -200px; ">

			<h1 class="text-center">Seu histórico de consultas:</h1>
			
			<div class="card mb-5">
				<div class="card-body">
					<div class="row col-12 col-md">
				

						<table class="table table-hover table-striped m-0">
							<tbody>
								<?php foreach ($historico_alteracoes as $k => $v) { ?>
								<tr class="table-<?=$v['tipo']?>">
									<td><?=$v['mensagem']?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<a href="index.php" class="btn btn-success ">Voltar</a>


					</div>
					
				</div>
			</div>
		</div>
	</div>









	<!-- FOOTER -->
	<?php require_once('include/footer.php'); ?>

	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>