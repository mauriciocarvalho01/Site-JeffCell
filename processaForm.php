<?php

$para = "developer.mauricio1@gmail.com";
$assunto = "Contato de Orçamento pelo Site";
$nome= $_REQUEST['nome'];
$telefone= $_REQUEST['telefone'];
$email= $_REQUEST['email'];
$marca= $_REQUEST['marca'];
$modelo= $_REQUEST['modelo'];
$defeito= $_REQUEST['defeito'];
$estado= $_REQUEST['estado'];
$cidade= $_REQUEST['cidade'];
$bairro= $_REQUEST['bairro'];
$observacao= $_REQUEST['observacao'];


$corpo = "<strong style='color:#07527c'>Orçamento de $none pelo Site</strong><br><br>";
$corpo.= "<strong style='color:#07527c'>Nome: </strong>$nome<br>";
$corpo.= "<strong style='color:#07527c'>Telefone: </strong>$telefone <br>";
$corpo.= "<strong style='color:#07527c'>Email: </strong>$email <br>";
$corpo.= "<strong style='color:#07527c'>Marca do Celular: </strong>$marca <br>";
$corpo.= "<strong style='color:#07527c'>Modelo do Celular: </strong>$modelo <br>";
$corpo.= "<strong style='color:#07527c'>Defeito: </strong>$defeito <br>";
$corpo.= "<strong style='color:#07527c'>Estado: </strong>$estado <br>";
$corpo.= "<strong style='color:#07527c'>Cidade: </strong>$cidade <br>";
$corpo.= "<strong style='color:#07527c'>Bairro: </strong>$bairro <br>";
$corpo.= "<strong style='color:#07527c'>Observação: </strong>$observacao <br>";

$header= "Content-Type: text/html; charset=utf-8\n";
$header.= "From: $email Reply-to: $email\n";


mail($para, $assunto, $corpo, $header);

@header("location:orcamento.php?orcamento=enviado");


?>


 



































 
        