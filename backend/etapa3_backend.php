<?php
	require_once('include/conexao.php');
	session_start(); 

	$pesos[] = array();
	foreach ($_SESSION['resp_selec'] as $id_sintoma => $id_resposta) {
		$sql = "SELECT * FROM tb_respostas WHERE id = '$id_resposta'";
		$queryPeso = mysqli_query($con, $sql);
		$resultPeso = mysqli_fetch_array($queryPeso);
		$pesos[$_SESSION['id_sintoma']] = $resultPeso['peso'];
	}
?>