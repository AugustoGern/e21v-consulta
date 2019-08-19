<?php 
require_once "conexao.php";

	// Iniciar sessão
session_start();

	// Sistemática de Login
if (!isset($_SESSION['logado']) || $_SESSION['logado'] == false) {
		// Permitir o login
	if (isset($_POST['botao_login'])) {
			// Receber os dados
		$email = $_POST['email_login'];
		$senha = $_POST['senha_login'];

		$sqlLogin = "SELECT * FROM tb_usuarios WHERE email = '$email' AND senha = '$senha'";
		$queryLogin = mysqli_query($con, $sqlLogin);
		$resultadoLogin = mysqli_fetch_array($queryLogin);

		if ($resultadoLogin != null) {
					// Criar a sessão do usuário
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $resultadoLogin['id'];
				$_SESSION['nome_usuario'] = $resultadoLogin['nome'];

				header('Location: perguntas.php');
		
		}
	}
}


?>