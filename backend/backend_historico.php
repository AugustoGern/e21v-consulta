<?php 
	require_once('include/conexao.php');

	// RECUPERA AS CONSULTAS ANTERIORES
	$sql = "SELECT h.*, a.area_medica AS area, p.parte_corpo AS parte FROM tb_historico h
			JOIN tb_area_medica a ON a.id = h.fk_am
			JOIN tb_partes_corpo p ON p.id = h.fk_parte";
	$queryConsulta = mysqli_query($con, $sql);



	// MOSTRA AS INFORMAÇÕES DO MEDICA RECOMENDADO PARA O USUARIO
	if (isset($_GET['id'])) {
		$id_consulta = $_GET['id'];
	}

	$sqlMedicos = "SELECT m.*, a.area_medica AS area, h.nome AS hospital, i.tipo_incomodo AS tipo FROM tb_medicos m
			JOIN tb_area_medica a ON a.id = m.fk_am
			JOIN tb_hospital h ON h.id = m.fk_hospital
			JOIN tb_tipos_incomodo i ON i.fk_am = a.id
			WHERE ";
	$queryMedicos = mysqli_query($con, $sqlMedicos);

	$sql = "SELECT m.*, a.area_medica AS area, h.nome AS hospital FROM tb_medicos m
			JOIN tb_area_medica a ON a.id = m.fk_am
			JOIN tb_hospital h ON h.id = m.fk_hospital
			WHERE ";
?>