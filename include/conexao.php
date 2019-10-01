<?php

	CONST HOST = "faqhospital.tk:3306";
	CONST USER = "faqhospi_root";
	CONST PASS = "entra21@blusoft";
	CONST DB = "faqhospi_master";
$con = mysqli_connect(HOST, USER, PASS, DB);

if (!$con) {
	die("ERRO: Não foi possível conectar ao banco de dados ->" . mysqli_connect_erro());
}



?>