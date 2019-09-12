<?php

	CONST HOST = "faqhospital.tk:3306";
	CONST USER = "faqhospi";
	CONST PASS = "entra21@Blusoft";
	CONST DB = "faqhospi_master";

$con = mysqli_connect(HOST, USER, PASS, DB);

if (!$con) {
	die("ERRO: Não foi possível conectar ao banco de dados ->" . mysqli_connect_erro());
}



?>