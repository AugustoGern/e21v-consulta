<!-- ==============================================NAVBAR======================================================= -->
<nav class="navbar  navbar-expand-lg navbar-light mb-5" style="background-color: rgb(10,68,161,0.90);">
	<a class="navbar-brand" href="index.php">
		<img src="media/images/logo.png" style="width: 40px;  ">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse  navbar-collapse " id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link text-white" href="index.php">Início <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="sobre.php">Sobre</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="consulta.php">Consultar</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<a class="navbar-brand text-light " href="historico.php">
				<i class="fas fa-history nav-link ml-2" href="#"></i>
			</a>

			<a class="navbar-brand text-light " href="#">
				<i class="fas fa-user nav-link ml-2   " data-target="#exampleModall"  href="#" data-toggle="modal" 
				data-whatever="@fat" ></i>
			</a>

			<a class="navbar-brand text-light " href="#">
				<i class="fas fa-user-plus nav-link ml-2 " data-target="#exampleModal"  href="#" data-toggle="modal" 
				></i>
			</a>
		</form>
	</div>
</nav>

<!-- ==========================================Pagina login======================================================== -->

<?php 
require_once "login.php";

?>

<div class="modal fade " id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div id="exampleModall" class="login-box rounded pt-0">
		<div class="modal-dialog"></div>
		<div role="document">

			<h1 class=" m-0 pb-2 text-center  " style="font-size: 20px;">Login </h1>
			<form action="" method="post">
				<!-- E-mail -->
				<label for="email_login">E-mail</label>
				<input type="email" class="form-control" name="email_login" id="email_login" placeholder="Fulando@gmail.com"
				 required="">

				<!-- Senha -->
				<label for="senha_login">Senha</label>
				<input type="password" class="form-control" id="senha_login" name="senha_login" placeholder="******">
				<input type="submit" class="btn" name="botao_login" id="botao_login" value="login"  required="">
				<a href="#">Esqueceu a senha?</a>    
			</form>
		</div>
	</div>
</div>

<!-- =============================================pagina cadastro======================================================== -->
	<?php require_once('cadastro_usuarios.php'); ?>


<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div id="exampleModall" class="login-box rounded pt-0">
		<div class="modal-dialog"></div><!-- para conseguir voltar se apertar "esc" -->
		<div role="document">

			<h1 class=" m-0 pb-2 text-center  " style="font-size: 20px;">Cadastre-se </h1>
			<form method="post" action="" name="formCadastro">
				<div class="row">
					<div class=" col-lg-6">
						<label for="nome">Nome Completo:<strong class="text-danger"> *</strong></label>
						<input type="text" name="nome" id="nome" placeholder="Gabriel de Souza" required="" ><br>
					</div>
					<div class="col-lg-6">
						<label for="email">Email:<strong class="text-danger"> *</strong></label>
						<input type="email" name="email" id="email" required=""><br>
					</div>
				</div>

				<div class="row">
					<div class=" col-lg-6">
						<label for="dataNasc">Data de Nascimento: <strong class="text-danger"> *</strong></label>
						<input type="date" name="dataNasc" id="dataNasc" required="" ><br>
					</div>
					<div class=" col-lg-6" >
						<label for="sexo">Sexo: <strong class="text-danger"> *</strong></label>
						<select  name="sexo" id="sexo" required="">
							<option>Masculino</option>
							<option>Feminino</option>
						</select><br>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<label for="senha">Senha: <strong class="text-danger"> *</strong></label>
						<input type="password" name="senha" id="senha" class="form-control" required=""><br>
					</div>
					<div class="col-lg-6">
						<label for="confSenha">Confirmar Senha: <strong class="text-danger"> *</strong></label>
						<input type="password" name="confSenha" id="confSenha" class="form-control" required=""><br>
					</div>
				</div>


				<input type="submit" name="cadastro" id="cadastro" class="btn btn-primary " value="Cadastre-se" disabled="">
			</form>
		</div>
	</div>
</div>

