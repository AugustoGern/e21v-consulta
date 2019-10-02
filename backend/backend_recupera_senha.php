<?php
require_once('include/conexao.php');
require_once('include/functions.php');

if (isset($_POST['btnSalvar'])) {

$email = $_POST['email'];

	$token = substr(md5(time()), 0, 6);
	$novasenha = md5(md5($token));
	
	$sql = "SELECT * FROM tb_usuario WHERE email = '$email'";
	$queryLogin = mysqli_query($con, $sql);
	$resultadoLogin = mysqli_fetch_array($queryLogin);

	$sqlLogin = "UPDATE tb_usuario SET token = '$token' email = '$email' WHERE  id = id_usuario";
	$query = mysqli_query($con, $sql);

	$corpo = "<h1>Olá $nome</h1>";
	$corpo .= "<p>Para trocar de senha vá na opção Editar </p>";
	$corpo .= "<p>$mensagem</p>";

	$envio = nova_senha($email, 'symfinder@gmail.com', 'Sistema de recuperação de senha', 'symfinder@gmail.com', 'Tenha uma boa consulta', $corpo);


	if ($envio == true) {
		echo "Contato enviado com successo!";
		header('Location: index.php');

	} else {
		echo "Erro ao enviar contato <br>";
		echo $envio;

	}



}

?>