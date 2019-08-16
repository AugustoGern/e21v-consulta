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
			<a class="navbar-brand text-light " href="#">
				<i class="fas fa-history nav-link ml-2" href="#"></i>
			</a>

			<a class="navbar-brand text-light " href="#">
				<i class="fas fa-user nav-link ml-2   " data-target="#exampleModall"  href="#" data-toggle="modal" 
				data-whatever="@fat" ></i>
			</a>

			<a class="navbar-brand text-light " href="cadastro.php">
				<i class="fas fa-user-plus nav-link ml-2   "" 
				></i>
			</a>
		</form>
	</div>
</nav>

<!-- ==========================================Pagina login======================================================== -->
<div class="modal fade " id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div id="exampleModall" class="login-box rounded pt-0">
		<div class="modal-dialog"></div>
		<div role="document">

			<h1 class=" m-0 pb-2 text-center  " style="font-size: 20px;">Login </h1>
			<form>
				<p>E-mail:</p>

				<input type="email" name="username" id="name" aria-describedby="emailHelp" 
				placeholder="fulano@gmail.com" >

				<p>Senha:</p>

				<input type="password" class="form-control" id="password" name="password" placeholder="*******">
				<input type="submit" name="submit" value="Login">
				<a href="#">Esqueceu a senha?</a>    
			</form>
		</div>
	</div>
</div>