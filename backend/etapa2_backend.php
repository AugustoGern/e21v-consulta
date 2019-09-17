<?php 
	
	// CONEXÃO COM O BANCO DE DADOS
	require_once('include/conexao.php');

	//RECUPERAR VIA GET A AREA DO CORPO SELECIONADA
	if (isset($_GET['area'])) {
		$area = $_GET['area'];
	}

	// CONTA AS PAGINAS DE SINTOMAS APRESENTADOS
	if (isset($_GET['step'])) {
		$step = $_GET['step'];
	} else {
		$step = 0;
	}

?>