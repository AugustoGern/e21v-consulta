<?php 
	
	// CONEXÃO COM O BANCO DE DADOS
	require_once('include/conexao.php');

	//RECUPERAR VIA GET A AREA DO CORPO SELECIONADA
	if (isset($_GET['area'])) {
		$area = $_GET['area'];
	}

?>