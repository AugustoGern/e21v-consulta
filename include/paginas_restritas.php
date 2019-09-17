<?php
	// VERIFICAÇÃO DE PAGINA RESTRITA
	// Verificando se esta logado
	if (!(isset($_SESSION['logado']) && $_SESSION['logado']==true)) {
		header('Location: erros.php');
	}
?>