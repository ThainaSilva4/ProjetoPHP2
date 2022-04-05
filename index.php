<?php

require_once("pessoa.class.php");
require_once("empresa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Thainá Ferreira da Silva");
$pessoa->setEndereco("<br> Rua Desconhecida.");
echo $pessoa->getNome();
echo $pessoa->getEndereco();

$empresa = new Empresa();
$empresa->setRazaoSocial("<br> Escola XPTO LTDA");
echo $empresa->getRazaoSocial();
?>