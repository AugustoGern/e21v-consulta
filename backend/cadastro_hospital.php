<?php 
	
	require_once('include/conexao.php');

	// Recuperar ID do usuario
	if (isset($_GET['id'])) {
		$id_hospital = $_GET['id'];
	}

	// Buscar informações do usuario
	if (isset($id_hospital)) {
		$sql = "SELECT * FROM tb_hospital WHERE id = id_hospital";
		$queryHospital = mysqli_query($con, $sql);
		$resultadoHospital = mysqli_fetch_array($queryHospital);

		// Verificar se o usuario existe
		if (is_null($resultadoHospital)) {
			die("Usuario não encontrado.");
		}
	}

	// Verificando ação de CADASTRAR
	if (isset($_POST['btnSalvar'])) {
		// Recebimento dos campos
		$nome = $_POST['nome_hosp'];
		$telefone = $_POST['telefone'];
		$cidade = $_POST['cidade'];
		

		// Verifica se é edição ou cadastro de usuario
		if (isset($id_hospital)) {
			$sql = "UPDATE tb_hospital SET nome = '$nome', telefone = '$telefone', cidade = '$cidade' WHERE id = id_hospital";
		} else {
			$sql = "INSERT INTO tb_hospital VALUES (DEFAULT, '$nome', '$telefone', '$cidade')";
		}

		if (mysqli_query($con, $sql)) {
			header('Location: profissional.php');
		} else {
			die("SE FODEU");
		}
	}

	// Verificando ação de EXCLUIR
	if (isset($_POST['btnExcluir'])) {
		$sql = "DELETE FROM tb_hospital WHERE id = id_hospital";

		if (mysqli_query($con, $sql)) {
			header('Location: profissional.php');
		} else {
			die("DEU RUIM");
		}
	}	



?>