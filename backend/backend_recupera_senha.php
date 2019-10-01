<?php
require_once('include/conexao.php');
require_once('include/functions.php');

if (isset($_POST['btnSalvar'])) {

	$sqlLogin = "SELECT * FROM tb_usuario WHERE email = '$email'";
	$queryLogin = mysqli_query($con, $sqlLogin);
	$resultadoLogin = mysqli_fetch_array($queryLogin);

	$token = substr(md5(time()), 0, 6);
	$novasenha = md5(md5($token));

	$sqlLogin = "UPDATE tb_usuario SET senha = '$novasenha' WHERE  email = '$email'";
	$queryLogin = mysqli_query($con, $sqlLogin);

	$corpo = "<h1>Olá $nome</h1>";
	$corpo .= "<p>Para trocar de senha vai na opção Editar </p>";
	$corpo .= "<p>$mensagem</p>";

	$envio = nova_senha($email, 'symfinder@gmail.com', 'Padaria do Juca', 'symfinder@gmail.com', 'Contato no site - Padaria do Juca', $corpo);

		header('Location: index.php');
var_dump($queryLogin);

	if ($envio == true) {
		echo "Contato enviado com sucesso!";


	} else {

		echo "Erro ao enviar contato =( <br>";
		echo $envio;
	}



}

?>