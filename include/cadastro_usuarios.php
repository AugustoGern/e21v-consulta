<?php

	require_once('conexao.php');

	// Recuperar ID do usuario
	if (isset($_GET['id'])) {
		$id_usuario = $_GET['id'];
	}

	// Buscar informações do usuario
	if (isset($id_usuario)) {
		$sql = "SELECT * FROM tcc_consulta WHERE id = $id_usuario";
		$queryUsuario = mysqli_query($con, $sql);
		$resultadoUsuario = mysqli_fetch_array($queryUsuario);

		// Verificar se o usuario existe
		if (is_null($resultadoUsuario)) {
			die("Usuario não encontrado.");
		}
	}




	// Verificando ação de CADASTRAR
	if (isset($_POST['cadastro'])) {
		// Recebimento dos campos
		$nomeCompleto = $_POST['nome'];
		$emailUsuario = $_POST['email'];
		$dataNasc = $_POST['dataNasc'];
		$sexo = $_POST['sexo'];
		$senha = $_POST['senha'];


		// Verifica se é edição ou cadastro de usuario
		if (isset($id_usuario)) {
			$sql = "UPDATE tb_usuario SET nome_completo = '$nomeCompleto', email = '$emailUsuario', data_nascimento = '$dataNasc', sexo = '$sexo', senha = '$senha' WHERE id = $id_usuario";
		} else {
			$sql = "INSERT INTO tb_usuario VALUES (DEFAULT, '$nomeCompleto', '$emailUsuario', '$dataNasc', '$sexo', '$senha')";
		}
		
		

?>