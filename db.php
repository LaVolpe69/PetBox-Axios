<?php


//acesso ao banco
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nome = "adocaoAnimal";
//$usuario_id = $_SESSION['usuarioID'];



//funcões de acesso

@$conexao = mysql_connect($servidor,$usuario,$senha);
mysql_select_db($nome);





function inserirAdocao ($nome, $cpf,$nome_animal, $telfixo, $celular){




$query = "INSERT INTO adocao (nome, cpf, nome_animal, telfixo, celular) VALUES ";
$query .= "('$nome','$cpf','$nome_animal', '$telfixo', '$celular')";  


mysql_query($query);

}


function inserirUsuario ($nome, $cpf, $senha, $datanasc, $tipo, $cep, $logradouro, $bairro, $cidade, $num, $complemento, $telfixo, $celular){




$query = "INSERT INTO usuario (nome, cpf, senha,  datanasc, tipo, cep, logradouro, bairro, cidade, num, complemento, telfixo, celular) VALUES ";
$query .= "('$nome','$cpf','$senha', '$datanasc', '$tipo', '$cep', '$logradouro','$bairro', '$cidade', '$num', '$complemento', '$telfixo', '$celular')";  


mysql_query($query);


}



?>