<?php
require_once('include/conexao.php');
session_start(); 

$consideravel = 0;
$desempate = 0;
$desconsideravel = 0;

$pesos = array();
$resultadoFinal = array();
$tipo = array();
	// CONVERTER AS RESPOSTAS PARA ID_SINTOMA E PESO
foreach ($_SESSION['resp_selec'] as $id_sintoma => $id_resposta) {
	$sql = "SELECT * FROM tb_respostas WHERE id = '$id_resposta'";
	$queryPeso = mysqli_query($con, $sql);
	$resultPeso = mysqli_fetch_array($queryPeso);
	$pesos["$id_sintoma"] = $resultPeso['peso'];
	unset($sql);
	
}

	// BUSCAR TODAS AS POSSIVEIS DOENCAS PARA OS SINTOMAS CONVERTIDOS ACIMA
foreach ($pesos as $id_sintoma => $peso) {
	$sql = "SELECT * FROM tb_ti_sin WHERE fk_sin = '$id_sintoma'";
	$queryTipo = mysqli_query($con, $sql);
	$resultTipo = mysqli_fetch_all($queryTipo, MYSQLI_ASSOC);	
	unset($sql);

	foreach ($resultTipo as $chave => $resultadoTipo) {
		$tipo[] = $resultTipo[$chave]['fk_ti'];
	}

}

	// removendo dupliciade
$tipo = array_unique($tipo);

// percorrendo todos os possiveis tipos de incomodo
foreach ($tipo as $chave => $tipo_incomodo) {
	// percorrendo todas as respostas de sintomas, se o incomo atual tiver o sintoma, entra na conta senao pula o sintoma
	foreach ($pesos as $id_sintoma => $peso) {
		$sql = "SELECT * FROM tb_ti_sin WHERE fk_sin = '$id_sintoma'";
		$queryTipo = mysqli_query($con, $sql);
		$resultados = mysqli_num_rows($queryTipo);

		if ($resultados > 0) {
			if ($peso >= 64) {
				$consideravel += $peso;
			}

			if ($peso == 48) {
				$desempate += $peso;					
			}

			if ($peso < 48) {
				$desconsideravel += $peso;	
			}
		}

	}

	$resultadoFinal[$tipo_incomodo] = [
		'nr_sintoma_consideravel' => $consideravel,
		'nr_sintoma_desconsideravel' => $desconsideravel,
		'nr_sintoma_desempate' => $desempate,
	];	

}

echo '<pre>';
var_dump($resultadoFinal);
echo '</pre>';

?>