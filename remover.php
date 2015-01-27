<?php
include_once('db.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	$cpf_remov = $_POST['cpfpraremover'];

	removerUsuario($cpf_remov);

	header("Location: main.php?task=usuario_removido");

}

?>