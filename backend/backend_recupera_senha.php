<?php
require_once('include/conexao.php');


if (isset($_GET['ok'])) {
	$token = substr(md5(time()), 0, 6);
}
echo substr(md5(time()), 0, 6);


?>