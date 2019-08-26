<?php 
	
	require_once('include/conexao.php');

	// Recuperar ID do usuario
	if (isset($_GET['id'])) {
		$id_usuario = $_GET['id'];
	}

	// Buscar informações do usuario
	if (isset($id_usuario)) {
		$sql = "SELECT * FROM tb_medico WHERE id = $id_usuario";
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
		$nomeMedico = $_POST['nome_medico'];
		$areaAtuacao = $_POST['area_atuacao'];
		$hospital = $_POST['hospital'];

		// Verifica se é edição ou cadastro de usuario
		if (isset($id_usuario)) {
			$sql = "UPDATE tb_medico SET nome_medico = '$nomeMedico', area_atuacao = '$areaAtuacao', hospital = '$hospital'WHERE id = $id_usuario";
		} else {
			$sql = "INSERT INTO tb_medico VALUES (DEFAULT, '$nomeMedico', '$areaAtuacao', '$hospital')";
		}

		if (mysqli_query($con, $sql)) {
			header('Location: cadastro_medico.php');
		} else {
			die("SE FODEU");
		}
	}

	// Verificando ação de EXCLUIR
	if (isset($_POST['btnExcluir'])) {
		$sql = "DELETE FROM tb_medico WHERE id = $id_usuario";

		if (mysqli_query($con, $sql)) {
			header('Location: cadastro_medico.php');
		} else {
			die("DEU RUIM");
		}
	}	



?>