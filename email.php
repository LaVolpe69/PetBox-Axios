<?php

	$email = $_POST ['email'];
	$subject = "Recuperação de usuario e senha da PetBox";
	$message ="O login é o seu CPF e a sua senha é:";


	$to ="$email";
	
	mail($to, $subject, $message);
	
	
	echo "O login e senha foram enviados para o seu e-mail ";

		header("Location = index.php")
?>

