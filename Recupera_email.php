﻿<?php






?>


<!DOCTYPE HTML>


<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="libs/css/main.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="libs/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="libs/css/bootstrap-theme.min.css">

<title>Email</title>
</head>
<body>



<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      </style>

<form  class="form-signin" role="form"  name = "contatos"  method="post"  action="email.php"  >

<p style="text-align:center !important; color:#EF9C35;">
		<p style="text-align:center !important;"><img src="libs/images/logo.png" class="img-responsive"></p>
		<h2 style="text-align:center !important; color:#EF9C35;"><i>OficinaWEB</i></h2>
	</p>
		<p style="text-align:center !important; padding:5px; border-radius:5px;" class="bg-info">O seu login e senha serão enviados para o seu e-mail</p>

<p style="text-align:left;"><b>E-mail: </b></p>

<input id="email" type="email" name="email" maxlength="50" class="form-control" placeholder="Digite Seu Email" required="" autofocus="" autocomplete="off">

<br>
<button class="btn btn-warning btn-primary btn-block" type="submit" >Enviar</button><br>

<p style="font-size:9px !important;text-align:center;">2014 - Fábrica de Software Tortola S.A.</p>





</form>



</body>
</html>

<!-- Carregamento dos scripts -->
<script src="libs/js/jquery.min.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
<script src="libs/js/jquery.mask.min.js"></script>
<script type="text/javascript">