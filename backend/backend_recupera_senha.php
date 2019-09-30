<?php
require_once('include/conexao.php');
require_once('backend/funcoes.php');



if (isset($_POST['ok'])) {

	$email = $_POST['email']);
	$senha = $_POST['senha']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
}

$sqlLogin = "SELECT * FROM tb_usuario WHERE senha = '$senha'";
$queryLogin = mysqli_query($con, $sqlLogin);
$resultadoLogin = mysqli_fetch_array($queryLogin);



$token = substr(md5(time()), 0, 6);
$novasenha = md5(md5($token));

if (mail($email, "Sua nova senha", "Sua nova senha".$token)){


	$sqlLogin = "UPDATE tb_usuario SET token_recuperacao = '$novasenha' WHERE  email = '$email'";
	$queryLogin = mysqli_query($con, $sqlLogin);

}



}
?>