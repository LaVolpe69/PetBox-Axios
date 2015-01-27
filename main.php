<?php
include_once("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página

$GLOBALS['usuario_atual'] = $_SESSION['usuarioNome'];
$GLOBALS['userid']= $_SESSION['usuarioID'];


if ($_SERVER['REQUEST_METHOD'] == 'GET'){

$task = $_GET["task"];



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

<title>Oficina WEB</title>
</head>
<body>
<div class="container">
  <div id="logo" class="logo pull-right"><img src="libs/images/logotipo.png"></div>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="main.php?task=home"><img src="libs/images/logotipo.png" style="margin-top:-18px;"></a> -->
      <a class="navbar-brand" href="main.php?task=home"><img src="libs/images/logomini.png" style="margin-top:-15px; width:30%">
<p style="margin-top:-32px; margin-left:45px"><i>OficinaWEB</i></p></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="main.php?task=orcamento">Orçamento</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Serviços <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="main.php?task=novo_servico">Novo</a></li>
            <li><a href="main.php?task=acompanhamento">Acompanhamento</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Olá, <b><?php echo $_SESSION['usuarioNome'];?> </b></b><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="main.php?task=editar_cadastro">Editar Cadastro</a></li>
            <li><a href="main.php?task=remover_cadastro">Remover Cadastro</a></li>
            
            <li class="divider"></li>
            <li><a href="login.php?task=logout">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="content">

<?php

if($task=="novo_cadastro"){
	include("novo_cadastro.php");
}



if($task=="editar_cadastro"){
	include("editar_cadastro.php");
}

if($task=="remover_cadastro"){
	include("remover_cadastro.php");
}

if($task=="em_construcao"){
	include("em_construcao.php");
}

if($task=="novo_servico"){
  include("novo_servico.php");
}

if($task=="cadastrado"){
  echo '<div class="alert alert-success"><b>Cadastro efetuado com sucesso.</b></div>';
}

if($task=="servico_cadastrado"){
  echo '<div class="alert alert-success"><b>Serviço cadastrado com sucesso.</b></div>';
}

if($task=="usuario_removido"){
  echo '<div class="alert alert-success"><b>Usuário removido com sucesso.</b></div>';
}

if($task=="acompanhamento"){
  include("acompanhamento.php");
}

if($task=="orcamento"){
  include("orcamento.php");
}

if ($task=="cliente") {
  include("cliente.php");
}

if($task=="servico_naocadastrado"){
  echo '<div class="alert alert-success"><b>Placa não encontrada ou digitada de maneira incorreta.</b></div>';
}

if($task=="cadastro_atualizado"){
  echo '<div class="alert alert-success"><b>Atualização de cadastro realizada com sucesso.</b></div>';
}


if($task=="home"){
  include("home.php");
}


}//fechamento do get

?>

</div>
<footer>

<div class="panel panel-default">
    <div class="panel-footer pull-center">2014 - Fábrica de Software Tortola S.A. - Todos os direitos reservados.</div>
</div>


</footer>

</div>

<!-- Carregamento dos scripts -->
<script src="libs/js/jquery.min.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
<script src="libs/js/jquery.mask.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  
  //Máscaras
  $("#cpfpraremover").mask('000.000.000-00', {reverse: true});

});


</script>
</body>