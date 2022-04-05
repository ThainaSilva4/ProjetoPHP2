<?php

require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Thainá Ferreira da Silva");
echo $pessoa->getNome();

?>