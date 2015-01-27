<?php

include_once('db.php');
?>
<html>
<head>
<title>Autenticando Usuário </title>
<script type="text/javascript">
function loginsucesso(){
	setTimeout("window.location='painel.php'");
}

function loginfailed(){
	setTimeout("window.location='erro_login.html'",5000);
}

</script>
</head>

<body>
<?
$cpf= $_POST ['cpf'];
$senha= $_POST ['senha'];
$sql = mysql_query("SELECT * FROM usuario WHERE cpf = '$cpf' and senha = '$senha'") or die (mysql_error());
$row = mysql_num_rows($sql);

if($row > 0){
 session_start();
 $_SESSION['cpf']=$_POST['cpf'];
 $_SESSION['senha']=$_POST['senha'];
 

 echo "<script>loginsucesso()</script>";
}
 else{
	
	 echo "<script>loginfailed()</script>";
	 }
?>
</body>

</html>