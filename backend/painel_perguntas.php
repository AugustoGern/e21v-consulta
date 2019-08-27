<?php 
	
	require_once('include/conexao.php');

	// Recuperar ID do usuario
	if (isset($_GET['id'])) {
		$id_usuario = $_GET['id'];
	}

	// Buscar informações do usuario
	if (isset($id_usuario)) {
		$sql = "SELECT * FROM tb_perguntas WHERE id = $id_usuario";
		$queryUsuario = mysqli_query($con, $sql);
		$resultadoUsuario = mysqli_fetch_array($queryUsuario);

		// Verificar se o usuario existe
		if (is_null($resultadoUsuario)) {
			die("Usuario não encontrado.");
		}
	}

	// Verificando ação de CADASTRAR
	if (isset($_POST['btnSalvar'])) {
		// Recebimento dos campos
		$pergunta = $_POST['pergunta'];
		$regIncomodo = $_POST['reg_incomodo'];
		$localIncomodo = $_POST['local_incomodo'];

		// Verifica se é edição ou cadastro de usuario
		if (isset($id_usuario)) {
			$sql = "UPDATE tb_perguntas SET pergunta = '$pergunta', regiao_incomodo = '$regIncomodo', local_incomodo = '$localIncomodo' WHERE id = $id_usuario";
		} else {
			$sql = "INSERT INTO tb_perguntas VALUES (DEFAULT, '$pergunta', '$regIncomodo', '$localIncomodo')";
		}

		if (mysqli_query($con, $sql)) {
			header('Location: perguntas_painel.php');
		} else {
			die("SE FODEU");
		}
	}

	// Verificando ação de EXCLUIR
	if (isset($_POST['btnExcluir'])) {
		$sql = "DELETE FROM tb_perguntas WHERE id = $id_usuario";

		if (mysqli_query($con, $sql)) {
			header('Location: cadastro_perguntas.php');
		} else {
			die("DEU RUIM");
		}
	}	



?>